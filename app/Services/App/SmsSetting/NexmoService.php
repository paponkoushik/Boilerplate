<?php

namespace App\Services\App\SmsSetting;

use App\Models\Core\Setting\Setting;
use App\Repositories\Core\Setting\SettingRepository;
use App\Services\App\AppService;
class NexmoService extends AppService
{
    public function updateNexmoCredentials($request)
    {
        foreach ($request->only('sms_sent_from', 'sms_driver', 'key', 'secret_key', 'test_number') as $key => $item) {

            $setting = resolve(SettingRepository::class)->createSettingInstance($key, 'sms_setting');

            $setting->name = $key;
            $setting->value = encrypt($item);
            $setting->context = 'sms_setting';

            $setting->save();

        }

    }

    public function getData()
    {
        $data = resolve(SettingRepository::class)
            ->formatSettings(
                Setting::query()->where('context', 'sms_setting')->get(), true
            );

        if (filled($data)) {
            return [
                'sms_sent_from' => $data['sms_sent_from'],
                'sms_driver' => $data['sms_driver'],
                'key' => $data['key'],
                'secret_key' => $data['secret_key'],
                'test_number' => $data['test_number']
            ];
        } else [];
    }
}