<?php

namespace App\Http\Controllers\App\FormValidation;

use App\Http\Controllers\Controller;
use App\Http\Requests\App\FormValidationRequest;
use App\Services\App\FormValidationServices\FormValidationService;

class FormValidationController extends Controller
{
    public function __construct(FormValidationService $service)
    {
        $this->service = $service;
    }

    public function formValidation(FormValidationRequest $request)
    {
        $attributes = request()
            ->only('text', 'email', 'number', 'password_input', 'date', 'text_area');

        $attributes['time'] = date("H:i", strtotime($request->time));

        $input = $this->service
            ->save($attributes);

        return submitted_responses('data', compact('input'));
    }

}
