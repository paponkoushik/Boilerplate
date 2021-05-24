<?php

namespace App\Services\App\Fields;

use App\Models\App\Fields\InputField;
use App\Services\App\AppService;

class InputFieldService extends AppService
{
    public function __construct(InputField $input)
    {
        $this->model = $input;
    }

}