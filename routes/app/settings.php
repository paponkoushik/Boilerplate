<?php

use App\Http\Controllers\App\Settings\SmsSettingController;
use App\Http\Controllers\App\Settings\SettingsApiController;
use App\Http\Controllers\App\Settings\ReCaptchaSettingController;

//app-settings
Route::get('/app-setting', [SettingsApiController::class, 'settings'])
    ->name('app.settings');

// application settings value get from config
Route::get('general-settings', [SettingsApiController::class, 'index']);

//Sms setting
Route::post('/sms-settings', [SmsSettingController::class, 'update'])
    ->middleware('can:update_sms_settings')
    ->name('settings.update-sms');

Route::get('get-sms-setting-info', [SmsSettingController::class, 'getData']);

//reCAPTCHA setting
Route::post('/re-captcha-setting', [ReCaptchaSettingController::class, 'store'])
    ->middleware('can:update_recaptcha_settings')
    ->name('settings.update-recaptcha');
