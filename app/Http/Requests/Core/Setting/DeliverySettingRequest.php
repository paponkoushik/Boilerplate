<?php

namespace App\Http\Requests\Core\Setting;

use App\Http\Requests\BaseRequest;
use App\Models\Core\Traits\MailRules;

class DeliverySettingRequest extends BaseRequest
{
    use MailRules;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->provider == 'mailgun')
            return $this->mailgunRules();
        elseif ($this->provider == 'amazon_ses')
            return $this->amazonSesRules();
        else
            return [ 'provider' => 'required' ];
    }
}
