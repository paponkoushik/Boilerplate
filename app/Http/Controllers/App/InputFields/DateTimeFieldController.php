<?php

namespace App\Http\Controllers\App\InputFields;

use App\Http\Controllers\Controller;
use App\Services\App\Fields\DateTimeService;
use Illuminate\Http\Request;

class DateTimeFieldController extends Controller
{
    public function __construct(DateTimeService $service)
    {
        $this->service = $service;
    }

    public function store(Request $request)
    {
        if (empty($request->all())) return nothing_store();

        $attributes = request()
            ->only('date_picker');

        $attributes['time_picker'] = date("H:i", strtotime($request->time_picker));

        $input = $this->service
            ->save($attributes);
        
        return submitted_responses('data', compact('input'));
    }
}
