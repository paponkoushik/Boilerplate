<?php

use App\Http\Controllers\App\Crud\CrudController;
use App\Http\Controllers\App\DatatableController;

Route::view('/datatable', 'tables.datatable');

Route::group(['prefix' => 'tables'], function () {
    Route::get('/basic-datatable', [DatatableController::class, 'showBasicDatatable'])
        ->name('basic-datatable.data');

    Route::get('/advance', [DatatableController::class, 'showAdvanceDatatable'])
        ->name('advance-datatable.data');

    Route::get('/responsive', [DatatableController::class, 'showResponsiveDatatable'])
        ->name('responsive-datatable');

    Route::get('/filter', [DatatableController::class, 'datatableWithFilter'])
        ->name('filter-datatable');

    Route::get('/pagination', [DatatableController::class, 'datatablePagination'])
        ->name('paginate-datatable');

    Route::get('/functional', [CrudController::class, 'view'])
        ->name('functional');

    Route::get('/grid-view', [DatatableController::class, 'girdViewDataTable'])
        ->name('grid-view');
});

Route::resource('crud', CrudController::class);

Route::get('/datatable/name', [CrudController::class, 'getNameFromDatatable']);
