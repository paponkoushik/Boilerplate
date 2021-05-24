<?php

namespace App\Services\App\Fields;

use App\Models\App\Fields\MultiSelectField;
use App\Services\App\AppService;

class MultiSelectService extends AppService
{
    public function __construct(MultiSelectField $input)
    {
        $this->model = $input;
    }

    public function inputDataProcessing($request)
    {
        $attributes = request()
            ->only('select', 'smart_select');

        $attributes['multi_select'] = json_encode(request('multi_select'));

        return MultiSelectField::query()->create($attributes);
    }

}