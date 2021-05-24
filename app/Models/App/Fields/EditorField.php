<?php

namespace App\Models\App\Fields;

use App\Models\App\AppModel;
use App\Models\App\Traits\EditorValidationRules;

class EditorField extends AppModel
{
    use EditorValidationRules;

    protected $fillable = [
        'subject', 'editor',
    ];
}
