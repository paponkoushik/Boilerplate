<?php

namespace App\Models\App\FormValidationModel;

use App\Models\App\AppModel;
use App\Models\App\Traits\FormValidationRules;

class FormValidation extends AppModel
{

    use FormValidationRules;

    protected $fillable = [
        'text', 'email', 'password_input', 'number', 'date', 'time' , 'text_area'
    ];
}
