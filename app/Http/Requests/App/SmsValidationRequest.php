<?php


namespace App\Http\Requests\App;


use App\Models\App\Traits\SmsDriverValidationRules;

class SmsValidationRequest extends AppRequest
{
    use SmsDriverValidationRules;

    public function rules()
    {
        $driver = $this->only('sms_driver');

        if ($driver['sms_driver'] == 'nexmo') {
            return $this->nexmoRules();
        }
    }
}