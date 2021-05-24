<?php

namespace App\Services\App\Fields;

use App\Models\App\Fields\DateTimeField;
use App\Services\App\AppService;

class DateTimeService extends AppService
{
    public function __construct(DateTimeField $input)
    {
        $this->model = $input;
    }

}