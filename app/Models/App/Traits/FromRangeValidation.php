<?php

namespace App\Models\App\Traits;


trait FromRangeValidation
{
    public function createdRules()
    {
        return [
            'min_range' => 'required|min:6',
            'max_range' => 'required|max:6',
            'length' => 'required|min:5|max:10',
            'alphanumaric' => 'required|alpha_num',
        ];
    }
}