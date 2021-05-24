<?php


use App\Helpers\App\General\AppResponseHelper;

if (!function_exists('submitted_responses')) {
    function submitted_responses($name, $data)
    {
        return resolve(AppResponseHelper::class)->submittedResponse($name, $data);
    }
}


if (!function_exists('nothing_store')) {
    function nothing_store()
    {
        return resolve(AppResponseHelper::class)->nothingStoreResponse();
    }
}

if (!function_exists('update_failed_responses')) {
    function update_failed_responses($name, $data = [])
    {
        return resolve(AppResponseHelper::class)->updateFailedResponse($name, $data);
    }
}

if (!function_exists('file_upload_responses')) {
    function file_upload_responses($name, $data = [])
    {
        return resolve(AppResponseHelper::class)->fileUploadResponse($name, $data);
    }
}