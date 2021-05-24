<?php

namespace App\Http\Controllers\App\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\App\Dashboard\DashboardService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(DashboardService $service)
    {
        $this->service = $service;
    }

    public function getDefaultDashboardInfo(Request $request)
    {

        return $this->service->getDefaultDashboardInfo();
    }

    public function audienceOverviewChart(Request $request)
    {
        $date = $this->service->getDateRange($request->key);

        return $this->service->audienceOverviewChart($date['range']['to'], $date['range']['from'], $date['filter']);
    }

    public function browserOverviewChart(Request $request)
    {
        $date = $this->service->getDateRange($request->key);
        return $this->service->browserOverviewChart($date['range']['to'], $date['range']['from'], $date['filter']);

    }
}
