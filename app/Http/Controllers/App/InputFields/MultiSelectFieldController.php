<?php

namespace App\Http\Controllers\App\InputFields;

use App\Http\Controllers\Controller;
use App\Services\App\Fields\MultiSelectService;
use Illuminate\Http\Request;

class MultiSelectFieldController extends Controller
{
    public function __construct(MultiSelectService $service)
    {
        $this->service = $service;
    }

    public function store(Request $request)
    {
        if(empty($request->select) && empty($request->smart_select) && empty($request->multi_select))
            return nothing_store();

        $input = $this->service
            ->inputDataProcessing($request);

        return submitted_responses('data', compact('input'));
    }
}
