<?php


namespace App\Helpers\App\Traits;


use App\Models\Core\Setting\Setting;
use App\Repositories\Core\Setting\SettingRepository;

trait ReCaptchaHelper
{
    public function getReCaptcha()
    {
        $data =  resolve(SettingRepository::class)
            ->formatSettings(
                Setting::where('context','re-captcha-setting')
                ->get(), true
            );

        if (blank($data)) {
            $data['site_key'] = 'wrong';
            $data['recaptcha_enable'] = 0;
        }

        return ['site_key' => $data['site_key'], 'recaptcha_enable' => $data['recaptcha_enable']];
    }
}
