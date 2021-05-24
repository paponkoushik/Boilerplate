<?php

namespace App\Http\Requests\App;

use App\Models\App\FormValidationModel\RangeValidation;

class FormRangeValidationRequest extends AppRequest
{
    public function rules()
    {
        return $this->initRules(new RangeValidation());
    }
}
