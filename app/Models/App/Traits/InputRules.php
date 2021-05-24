<?php


namespace App\Models\App\Traits;


trait InputRules
{
    public function createdRules()
    {
        return [
            'text_input' => 'required|min:2|max:195',
            'email_input' => 'required|email',
            'password_input' => 'required',
            'decimal_input' => 'required',
            'number_input' => 'required',
            'readonly_input' => 'required',
            'disabled_input' => 'required',
            'select' => 'required',
            'radio' => 'required',
            'radio_buttons_group' => 'required',
            'datepicker' => 'date',
        ];
    }
}