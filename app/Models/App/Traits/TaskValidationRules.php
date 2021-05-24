<?php


namespace App\Models\App\Traits;


trait TaskValidationRules
{
    public function createdRules()
    {
        return [
            'title' => 'required|min:2|max:195'
        ];
    }

    public function updatedRules()
    {
        return [
            'title' => 'required|min:2|max:195',
        ];
    }
}
