<?php

namespace App\Http\Controllers\App\SamplePage\KanbanView;

use App\Http\Controllers\Controller;
use App\Models\App\SamplePage\KanbanView\Stage;
use Illuminate\Http\Request;

class StageController extends Controller
{
    public function index(){
        return Stage::with('tasks')->get();
    }
}
