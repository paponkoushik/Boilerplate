<?php


namespace App\Helpers\App\Traits;


use App\Helpers\Core\Traits\InstanceCreator;
use App\Services\Core\Setting\SettingService;
use Illuminate\Support\Facades\View;

class SetSettingsConfig
{
    use InstanceCreator;

    public function set()
    {
        $settings = cache()->remember('app-settings-global', 84000, function () {
                return resolve(SettingService::class)
                    ->getFormattedSettings();
            });

        View::composer('*', function($view) use ($settings) {
            $view->with('settings', $settings);
        });

        foreach ($settings as $key => $setting) {
            config()->set('settings.application.'.$key, $setting);

            if ($key == 'company_name') {
                config()->set('app.name', $setting);
            }
        }
    }

}
