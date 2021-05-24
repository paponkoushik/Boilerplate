<?php

namespace App\Http\Controllers\App\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\App\Dashboard\DashboardService;
use App\Services\App\Dashboard\HospitalDashboardService;
use Illuminate\Http\Request;

class HospitalDashboardController extends Controller
{
    public function __construct(HospitalDashboardService $service, DashboardService $dashboardService)
    {
        $this->service = $service;
        $this->dashboardService = $dashboardService;
    }

    public function defaultData()
    {
        return $this->service->defaultData();
    }

    public function hospitalActivities(Request $request)
    {
        $date = $this->dashboardService->getDateRange($request->key);
        return $this->service->hospitalActivities($date['range']['to'], $date['range']['from'], $date['filter']);
    }

    public function patientStatistics()
    {
        return $this->service->patientStatistics();
    }

    public function doctorsList(Request $request)
    {
        return $this->service->doctorsList($request);
    }

    public function upComingAppointments(Request $request)
    {
        return $this->service->upComingAppointments($request);
    }
}
