<?php


namespace App\Services\App\FormValidationServices;


use App\Models\App\FormValidationModel\FormValidation;
use App\Services\App\AppService;

class FormValidationService extends AppService
{

    public function __construct(FormValidation $input)
    {
        $this->model = $input;
    }

}