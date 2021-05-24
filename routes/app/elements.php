<?php

use App\Http\Controllers\App\UI\InterfaceController;

//icons layouts
Route::get('/icons', [InterfaceController::class, 'icons'])
    ->name('icons');

//modal layouts
Route::get('/modal', [InterfaceController::class, 'modals'])
    ->name('modals');

//Buttons layouts
Route::get('/buttons', [InterfaceController::class, 'buttons'])
    ->name('modals');

//Avatars layouts
Route::get('/avatars', [InterfaceController::class, 'avatars'])
    ->name('avatars');

//Badges and pills layouts
Route::get('/badges', [InterfaceController::class, 'badges'])
    ->name('badges');

//Error notes layouts
Route::get('/error-notes', [InterfaceController::class, 'errorNotes'])
    ->name('error-notes');

//Checkboxes and radios layouts
Route::get('/checkboxes-radios', [InterfaceController::class, 'checkboxAndRadio'])
    ->name('checkboxes-radios');

//Card layouts
Route::get('/cards', [InterfaceController::class, 'cards'])
    ->name('cards');

//tabs layouts
Route::get('/tabs', [InterfaceController::class, 'tabs'])
    ->name('tabs');

//Not found layouts
Route::get('/nothing-to-show', [InterfaceController::class, 'nothingToShow'])
    ->name('nothing-to-show');
