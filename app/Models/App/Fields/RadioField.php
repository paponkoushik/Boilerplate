<?php

namespace App\Models\App\Fields;

use App\Models\App\AppModel;

class RadioField extends AppModel
{
    protected $fillable = [
        'radio', 'radio_buttons_group', 'checkbox'
    ];
}
