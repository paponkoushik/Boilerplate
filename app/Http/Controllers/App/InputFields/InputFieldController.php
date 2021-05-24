<?php

namespace App\Http\Controllers\App\InputFields;

use App\Http\Controllers\Controller;
use App\Services\App\Fields\InputFieldService;
use Illuminate\Http\Request;

class InputFieldController extends Controller
{

    public function __construct(InputFieldService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('form.all-input-fields');
    }

    public function store(Request $request)
    {
        if (empty($request->all())) return nothing_store();

        $input = $this->service
            ->save();

        return submitted_responses('data', compact('input'));
    }
}
