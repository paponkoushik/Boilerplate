<?php

namespace App\Http\Controllers\App\Settings;

use App\Helpers\App\Traits\SmsHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\SmsValidationRequest;
use App\Services\App\SmsSetting\NexmoService;


class SmsSettingController extends Controller
{
    use SmsHelper;

    public function __construct(NexmoService $service)
    {
        $this->service = $service;
    }

    public function update(SmsValidationRequest $request)
    {
        $this->service->updateNexmoCredentials($request);

        if ($request->test_number) $this->sendSms($request->sms_sent_from, $request->test_number);
        return updated_responses('sms_setting');
    }

    public function getData()
    {
        return $this->service->getData();
    }
}
