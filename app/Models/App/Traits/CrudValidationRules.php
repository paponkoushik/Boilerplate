<?php


namespace App\Models\App\Traits;


trait CrudValidationRules
{
    public function createdRules()
    {
        return [
            'name' => 'required|min:2|max:195',
            'email' => 'required|email',
            'status' => 'nullable|in:active,inactive,invited',
            'gender' => 'nullable|in:male,female,other',
            'age' => 'nullable|numeric|max:120'
        ];
    }

    public function updatedRules()
    {
        return [
            'name' => 'required|min:2|max:195',
            'email' => 'required|email',
            'status' => 'nullable|in:active,inactive,invited',
            'gender' => 'nullable|in:male,female,other',
            'age' => 'nullable|numeric|max:120'
        ];
    }
}