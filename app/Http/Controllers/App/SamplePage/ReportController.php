<?php

namespace App\Http\Controllers\App\SamplePage;

use App\Http\Controllers\Controller;
use App\Models\App\SamplePage\Report;

class ReportController extends Controller
{
    public function index()
    {
        return Report::paginate(request('per_page', 10));
    }
}
