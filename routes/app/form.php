<?php

use App\Http\Controllers\App\UI\InterfaceController;
use App\Http\Controllers\App\InputFields\FilesFieldController;
use App\Http\Controllers\App\InputFields\InputFieldController;
use App\Http\Controllers\App\InputFields\RadioFieldController;
use App\Http\Controllers\App\InputFields\EditorFieldController;
use App\Http\Controllers\App\InputFields\DateTimeFieldController;
use App\Http\Controllers\App\InputFields\MultiSelectFieldController;
use App\Http\Controllers\App\FormValidation\FormValidationController;
use App\Http\Controllers\App\FormValidation\RangeValidationController;

Route::group(['prefix' => 'form'], function () {
    Route::get('/layouts', [InterfaceController::class, 'formLayouts'])
        ->name('form.form-layouts');

    Route::get('/elements', [InputFieldController::class, 'index'])
        ->name('all-form-input.index');

    Route::get('/validation', [InterfaceController::class, 'formValidation'])
        ->name('form.validation');

    Route::get('/text', [InterfaceController::class, 'formInputText'])
        ->name('form.input-text');

    Route::post('/input', [InputFieldController::class, 'store'])
        ->name('form-input');

    Route::post('/radio', [RadioFieldController::class, 'store'])
        ->name('form-radio');

    Route::post('/multi-select', [MultiSelectFieldController::class, 'store'])
        ->name('form-multi-select');

    Route::post('/date-picker', [DateTimeFieldController::class, 'store'])
        ->name('form-date-picker');

    Route::post('/files', [FilesFieldController::class, 'store'])
        ->name('form-files');

    Route::post('/multiple-files', [FilesFieldController::class, 'multiFileStore'])
        ->name('form-multiple-files');

    Route::post('/validate-fields', [FormValidationController::class, 'formValidation'])
        ->name('validate-input-fields');

    Route::post('/range-validation', [RangeValidationController::class, 'formRangeValidation'])
        ->name('form-range-validation');

    Route::post('/editor-input', [EditorFieldController::class, 'store'])
        ->name('editor-input');
});
