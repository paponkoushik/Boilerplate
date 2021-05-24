<?php

namespace App\Http\Controllers\App\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\App\Dashboard\DashboardService;
use App\Services\App\Dashboard\HrmDashboardService;
use Illuminate\Http\Request;

class HrmDashboardController extends Controller
{
    public function __construct(HrmDashboardService $service, DashboardService $dashboardService)
    {
        $this->service = $service;
        $this->dashboardService = $dashboardService;
    }

    public function basicData()
    {
        return $this->service->basicData();
    }

    public function projectOverview(Request $request)
    {
        $date = $this->dashboardService->getDateRange($request->key);
        return $this->service->projectOverview($date['range']['to'], $date['range']['from'], $date['filter']);
    }

    public function yearlyHoliday()
    {
        return $this->service->yearlyHoliday();
    }

    public function employeeOverview(Request $request)
    {
        return $this->service->employeeOverview($request->key);
    }

}
