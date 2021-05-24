<?php

namespace App\Models\App\FormValidationModel;

use App\Models\App\AppModel;
use App\Models\App\Traits\FromRangeValidation;
use Illuminate\Database\Eloquent\Model;

class RangeValidation extends AppModel
{
    use FromRangeValidation;

    protected $fillable = [
       'min_range', 'max_range', 'length', 'alphanumaric',
    ];
}
