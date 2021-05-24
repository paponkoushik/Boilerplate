<?php

namespace App\Http\Controllers\App\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\App\Dashboard\AcademicDashboardService;
use Illuminate\Http\Request;

class AcademicDashboardController extends Controller
{
    public function __construct(AcademicDashboardService $service)
    {
        $this->service = $service;
    }

    public function defaultData()
    {
        return $this->service->defaultData();
    }

    public function studentOverview(Request $request)
    {
        return $this->service->studentOverview($request->key);
    }

    public function schoolOverview()
    {
        return $this->service->schoolOverview();
    }

    public function instructorStudentOverview()
    {
        return $this->service->instructorStudentOverview();
    }

    public function availableCourseList(Request $request)
    {
        return $this->service->availableCourseList($request);
    }
}
