<?php

namespace App\Http\Controllers\App\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\App\ReCaptchaValidationRequest;
use App\Services\App\ReCaptchaSetting\ReCaptchaSettingService;

class ReCaptchaSettingController extends Controller
{
    /**
     * ReCaptchaSettingController constructor.
     * @param ReCaptchaSettingService $service
     */
    public function __construct(ReCaptchaSettingService $service)
    {
        $this->service = $service;
    }

    /**
     * @param ReCaptchaValidationRequest $request
     * @return
     */
    public function store(ReCaptchaValidationRequest $request)
    {
        $this->service->updateReCaptchaSetting();
        return updated_responses('re-captcha-setting');
    }

    /**
     * @return array
     */
    public function getReCaptchaSettings()
    {
         return $data = $this->service->getReCaptchaSetting();
    }
}
