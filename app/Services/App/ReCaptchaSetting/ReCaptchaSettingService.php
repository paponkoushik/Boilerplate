<?php


namespace App\Services\App\ReCaptchaSetting;

use App\Models\Core\Setting\Setting;
use App\Repositories\Core\Setting\SettingRepository;
use App\Services\App\AppService;
use Config;

class ReCaptchaSettingService extends AppService
{
    protected $repository;
    /**
     * ReCaptchaSettingService constructor.
     * @param SettingRepository $repository
     */
    public function __construct(SettingRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * To store reCaptcha settings
     */
    public function updateReCaptchaSetting()
    {
        $this->setToConfig();
        foreach (\request()->only('site_key', 'secret_key', 'recaptcha_enable') as $key => $item)
        {
            $setting = $this->repository->createSettingInstance($key, 're-captcha-setting');

            $setting->name = $key;
            $setting->value = encrypt($item);
            $setting->context = 're-captcha-setting';

            $setting->save();
        }
    }

    public function setToConfig()
    {
        config()->set('services.googlerecaptcha.site_key', \request()->only('site_key'));
        config()->set('services.googlerecaptcha.secret_key', \request()->only('secret_key'));
    }

    /**
     * @return array
     */
    public function getReCaptchaSetting()
    {
        $data =  resolve(SettingRepository::class)
            ->formatSettings(
                Setting::query()->where('context','re-captcha-setting')
                    ->get(), true
            );

        if (!empty($data)) {
            return [
                'site_key' => $data['site_key'],
                'secret_key' => $data['secret_key'],
                'recaptcha_enable' => $data['recaptcha_enable'],
            ];
        } else return [];
    }

}