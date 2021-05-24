<?php

namespace App\Models\App\Crud;

use App\Models\App\AppModel;
use App\Models\App\Traits\CrudValidationRules;

class Crud extends AppModel
{
    use CrudValidationRules;

    protected $fillable = ['name', 'email', 'phone', 'gender', 'age', 'status'];
}
