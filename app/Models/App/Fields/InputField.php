<?php

namespace App\Models\App\Fields;

use App\Models\App\AppModel;

class InputField extends AppModel
{
    protected $fillable = [
        'text_input', 'email_input', 'password_input', 'decimal_input', 'number_input', 'readonly_input', 'disabled_input', 'textarea'
    ];
}
