<?php

namespace App\Http\Requests\App;

use App\Models\App\FormValidationModel\FormValidation;

class FormValidationRequest extends AppRequest
{
    public function rules()
    {
        return $this->initRules(new FormValidation());
    }
}
