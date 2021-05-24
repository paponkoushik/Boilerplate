<?php

namespace App\Http\Controllers\App\FormValidation;

use App\Http\Controllers\Controller;
use App\Http\Requests\App\FormRangeValidationRequest;
use App\Services\App\FormValidationServices\RangeValidationService;

class RangeValidationController extends Controller
{
    public function __construct(RangeValidationService $service)
    {
        $this->service = $service;
    }

    public function formRangeValidation(FormRangeValidationRequest $request)
    {
        $input = $this->service
            ->save();
        return submitted_responses('data', compact('input'));
    }
}
