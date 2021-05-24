<?php

namespace App\Mail\App\Traits;


use App\Helpers\Core\Traits\InstanceCreator;
use App\Repositories\Core\Setting\SettingRepository;
use App\Services\Core\Setting\DeliverySettingService;
use Config;

class SetMailConfig
{
    use InstanceCreator;

    public function clear()
    {
        \Artisan::call('config:clear');
        return $this;
    }

    public function set()
    {

        $mailSettings = cache()->remember('app-delivery-settings', 84000, function () {
            return resolve(SettingRepository::class)
                ->getDeliverySettingLists([
                    optional(resolve(DeliverySettingService::class)
                        ->getDefaultSettings('default_mail'))->value,
                    'default_mail_email_name'
                ]);
        });

        if ($mailSettings) {

            Config::set('mail.driver', $mailSettings['provider']);
            Config::set('mail.from.address', $mailSettings['from_email']);
            Config::set('mail.from.name', $mailSettings['from_name']);

            if ($mailSettings['provider'] == 'smtp') {

                Config::set('mail.host', $mailSettings['smtp_host']);
                Config::set('mail.port', $mailSettings['smtp_port']);
                Config::set('mail.encryption', $mailSettings['encryption_type']);
                Config::set('mail.username', $mailSettings['from_email']);
                Config::set('mail.password', $mailSettings['email_password']);

            } elseif ($mailSettings['provider'] == 'mailgun') {

                Config::set('services.mailgun.domain', $mailSettings['domain_name']);
                Config::set('services.mailgun.secret', $mailSettings['api_key']);

            } elseif ($mailSettings['provider'] == 'ses') {

                Config::set('services.ses.key', $mailSettings['access_key_id']);
                Config::set('services.ses.secret', $mailSettings['secret_access_key']);
                Config::set('services.ses.region', $mailSettings['region']);

            }
        }
    }
}
