<?php


namespace App\Http\Requests\App;


class ReCaptchaValidationRequest extends AppRequest
{
    public function rules()
    {
        return [
            'site_key' => 'required',
            'secret_key' => 'required',
            'recaptcha_enable' => 'required',
        ];
    }
}