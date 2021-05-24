<?php


namespace App\Services\App\Fields;


use App\Models\App\Fields\EditorField;
use App\Services\App\AppService;

class EditorFieldService extends AppService
{
    public function __construct(EditorField $model)
    {
        return $this->model = $model;
    }

}