<?php

namespace App\Helpers\App\Traits;


use App\Services\App\SmsSetting\NexmoService;

trait SmsHelper
{
    public function sendSms($from, $phone)
    {
        $data = resolve(NexmoService::class)->getData();

        if (empty($data['key']) || empty($data['secret_key'])) {

            return updated_responses('sms_setting');

        } else {
            try {
                $basic = new \Nexmo\Client\Credentials\Basic($data['key'], $data['secret_key']);
                $client = new \Nexmo\Client($basic);

                $message = $client->message()->send([
                    'to' => preg_replace('/(\W*)/', '', $phone),
                    'from' => $from,
                    'text' => "text"
                ]);

                return $message;
            } catch (\Exception $exception) {

                return $exception;
            }

        }
    }

}