<?php


namespace App\Hooks\User;


use App\Helpers\Core\Traits\InstanceCreator;
use App\Hooks\HookContract;

class AfterSettingSaved extends HookContract
{
    use InstanceCreator;

    public function handle()
    {
        if ($this->model->context === 'app') {
            cache()->forget('app-settings-global');
        }

        cache()->forget('app-delivery-settings');

        cache()->forget($this->model->context.'_settings_cached');
    }
}