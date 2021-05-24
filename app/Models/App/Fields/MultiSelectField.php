<?php

namespace App\Models\App\Fields;

use App\Models\App\AppModel;

class MultiSelectField extends AppModel
{
    protected $fillable = [
        'select', 'multi_select', 'smart_select'
    ];
}
