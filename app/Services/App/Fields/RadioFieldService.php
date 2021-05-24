<?php

namespace App\Services\App\Fields;

use App\Models\App\Fields\RadioField;
use App\Services\App\AppService;

class RadioFieldService extends AppService
{
    public function __construct(RadioField $input)
    {
        $this->model = $input;
    }

    public function inputDataProcessing($request)
    {
        $attributes = request()->only('radio', 'radio_buttons_group');

        $attributes['checkbox'] = json_encode(request('checkbox'));

        return RadioField::query()->create($attributes);
    }
}