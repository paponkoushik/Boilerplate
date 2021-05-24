<?php

namespace App\Models\App\Traits;


trait SmsDriverValidationRules
{
    public function nexmoRules()
    {
        return [
            'sms_sent_from' => 'required',
            'sms_driver' => 'required',
            'key' => 'required',
            'secret_key' => 'required',
        ];
    }
}