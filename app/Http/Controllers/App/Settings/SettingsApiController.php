<?php

namespace App\Http\Controllers\App\Settings;

use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Services\Core\Setting\SettingService;

class SettingsApiController extends Controller
{
    public function __construct(SettingService $setting)
    {
        $this->service = $setting;
    }

    public function index()
    {
        return [
            'time_format' => array_map(function ($format) {
                return ['id' => $format, 'value' => trans('default.'.$format)];
            }, config('settings.time_format')),

            'currency_position' => array_map(function ($format) {
                return ['id' => $format, 'value' => trans('default.'.$format)];
            }, config('settings.currency_position')),

            'date_format' => array_map(function ($format) {
                return ['id' => $format, 'value' => trans('default.'.$format)];
            }, config('settings.date_format')),

            'decimal_separator' => array_map(function ($format) {
                return ['id' => $format, 'value' => trans('default.'.$format)];
            }, config('settings.decimal_separator')),

            'thousand_separator' => array_map(function ($format) {
                return ['id' => $format, 'value' => trans('default.'.$format)];
            }, config('settings.thousand_separator')),

            'number_of_decimal' => array_map(function ($format) {
                return ['id' => $format, 'value' => trans('default.'.$format)];
            }, config('settings.number_of_decimal')),

            'layouts' => array_map(function ($format) {
                return ['id' => $format, 'value' => trans('default.'.$format)];
            }, config('settings.layouts')),

            'time_zones' => array_map(function ($format) {
                return ['id' => $format, 'value' => $format];
            }, timezone_identifiers_list()),
        ];
    }

    public function getBasicSettingData()
    {
        return cache()->remember('app-settings-global', 84000, function () {
            return $this->service
                ->getFormattedSettings();
        });

    }

    public function settings()
    {
        return view('settings.app-setting', ['permissions' => [
            'general' => authorize_any(['view_settings','update_settings']),
            'email_settings' => authorize_any(['view_delivery_settings', 'update_delivery_settings']),
            'sms_settings' => authorize_any(['view_sms_settings', 'update_sms_settings']),
            'recaptcha_settings' => authorize_any(['view_recaptcha_settings', 'update_recaptcha_settings']),
            'notification' => authorize_any(['view_notification_settings', 'update_notification_settings', 'view_notification_templates', 'update_notification_templates']),
        ]]);
    }
}
