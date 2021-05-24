<?php

namespace App\Models\App\Fields;

use App\Models\App\AppModel;

class FilesField extends AppModel
{
    protected $fillable = [
        'default_file', 'custom_file', 'dropzone_file',
    ];
}
