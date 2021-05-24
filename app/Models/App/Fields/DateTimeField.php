<?php

namespace App\Models\App\Fields;

use App\Models\App\AppModel;

class DateTimeField extends AppModel
{
    protected $fillable = [
        'date_picker', 'time_picker'
    ];
}
