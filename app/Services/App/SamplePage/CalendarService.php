<?php

namespace App\Services\App\SamplePage;

use App\Models\App\SamplePage\Calendar;
use App\Services\App\AppService;

class CalendarService extends AppService
{
    public function __construct(Calendar $calendar)
    {
        $this->model = $calendar;
    }
}
