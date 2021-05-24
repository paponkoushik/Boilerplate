<?php


namespace App\Models\App\Traits;


trait EditorValidationRules
{
    public function createdRules()
    {
        return [
            'subject' => 'required|min:2|max:20',
            'editor' => 'required',
        ];
    }
}