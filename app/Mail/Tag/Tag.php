<?php


namespace App\Mail\Tag;


abstract class Tag
{
    protected $notifier;

    protected $receiver;

    protected $resourceurl;

    abstract function notification();

    public function common()
    {
        return array_merge([
            '{action_by}' => $this->notifier->full_name,
            '{receiver_name}' => $this->receiver->full_name,
            '{resource_url}' => $this->resourceurl,
        ], $this->appNameAndLogo());
    }

    public function appNameAndLogo()
    {
        $logo = config()->get('settings.application.company_logo');
        return [
            '{app_name}' => config('app.name'),
            '{app_logo}' => asset(empty($logo) ? '/images/logo.png' : $logo),
        ];
    }
}
