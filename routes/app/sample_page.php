<?php

use App\Http\Controllers\App\SamplePage\ReportController;
use App\Http\Controllers\App\SamplePage\CalendarController;
use App\Http\Controllers\App\SamplePage\KanbanView\TaskController;
use App\Http\Controllers\App\SamplePage\KanbanView\StageController;

Route::view('calendar-view', 'sample-pages.calendar-view');
Route::view('report-view', 'sample-pages.report');
Route::view('kanban-view', 'sample-pages.kanban-view');

// Calendar Events Handling
Route::resource('calendars', CalendarController::class);

// Report
Route::get('reports', [ReportController::class, 'index'])->name('report.index');

// Kanban-view task management
Route::get('stages', [StageController::class, 'index'])->name('stages.index');
Route::resource('tasks', TaskController::class);
