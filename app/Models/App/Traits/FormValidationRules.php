<?php

namespace App\Models\App\Traits;


trait FormValidationRules
{
    public function createdRules()
    {
        return [
            'text' => 'required',
            'email' => 'required|email',
            'number' => 'nullable|numeric',
            'password_input' => 'required|same:confirm_password',
            'date' => 'nullable|date',
            'text_area' => 'nullable|max:500',
        ];
    }

}