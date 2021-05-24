<?php

namespace App\Http\Controllers\App\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\App\Dashboard\DashboardService;
use App\Services\App\Dashboard\EcommerceDashboardService;
use Illuminate\Http\Request;

class EcommerceDashboardController extends Controller
{
    public function __construct(EcommerceDashboardService $service, DashboardService $defaultService)
    {
        $this->service = $service;
        $this->defaultService = $defaultService;
    }

    public function ecommerceDefaultInfo()
    {
        return $this->service->ecommerceDefaultInfo();
    }

    public function businessOverview(Request $request)
    {

        $date = $this->defaultService->getDateRange($request->key);
        return $this->service->businessOverview($date['range']['to'], $date['range']['from'], $date['filter'] );
    }

    public function contactOverview(Request $request)
    {
        $date = $this->defaultService->getDateRange($request->key);
        return $this->service->contactOverview($date['range']['to'], $date['range']['from'], $date['filter'] );
    }

    public function teamOverview()
    {
        return $this->service->teamOverview();
    }
}
