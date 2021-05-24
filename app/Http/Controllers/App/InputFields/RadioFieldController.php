<?php

namespace App\Http\Controllers\App\InputFields;

use App\Http\Controllers\Controller;
use App\Services\App\Fields\RadioFieldService;
use Illuminate\Http\Request;

class RadioFieldController extends Controller
{
    public function __construct(RadioFieldService $service)
    {
        $this->service = $service;
    }

    public function store(Request $request)
    {
        $radioCheckbox = $this->service;

        $input = $radioCheckbox->inputDataProcessing($request);

        return submitted_responses('data', compact('input'));
    }
}
