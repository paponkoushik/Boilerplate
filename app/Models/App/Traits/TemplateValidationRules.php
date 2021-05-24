<?php


namespace App\Models\App\Traits;


trait TemplateValidationRules
{
    public function updatedRules()
    {
        return [
            'title' => 'required|min:2|max:195',
            'subject' => 'required|min:2|max:195'
        ];
    }
}