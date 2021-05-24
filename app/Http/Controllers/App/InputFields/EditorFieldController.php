<?php

namespace App\Http\Controllers\App\InputFields;

use App\Http\Controllers\Controller;
use App\Http\Requests\App\EditorFieldRequest as Request;
use App\Services\App\Fields\EditorFieldService;

class EditorFieldController extends Controller
{
    public function __construct(EditorFieldService $service)
    {
        return $this->service = $service;
    }

    public function store(Request $request)
    {
        $input = $this->service->save();
        return submitted_responses('data', compact('input'));
    }
}
