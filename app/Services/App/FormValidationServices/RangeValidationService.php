<?php

namespace App\Services\App\FormValidationServices;


use App\Models\App\FormValidationModel\RangeValidation;
use App\Services\App\AppService;

class RangeValidationService extends AppService
{

    public function __construct(RangeValidation $input)
    {
        $this->model = $input;
    }
}