<?php


namespace App\Models\App\Traits;


trait CalendarValidationRules
{
    public function createdRules()
    {
        return [
            'title' => 'required|min:2|max:195',
            'start' => 'required'
        ];
    }

    public function updatedRules()
    {
        return [
            'title' => 'required|min:2|max:195',
        ];
    }
}
