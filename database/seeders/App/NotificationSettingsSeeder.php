<?php

namespace Database\Seeders\App;

use App\Models\Core\Auth\Role;
use App\Models\Core\Auth\Type;
use App\Models\Core\Setting\NotificationAudience;
use App\Models\Core\Setting\NotificationChannel;
use App\Models\Core\Setting\NotificationEvent;
use App\Models\Core\Setting\NotificationSetting;
use Database\Seeders\Traits\DisableForeignKeys;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Seeder;

class NotificationSettingsSeeder extends Seeder
{
    use DisableForeignKeys;
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();

        $channels = NotificationChannel::query()
            ->where('name', '=', 'database')
            ->get()
            ->pluck('name');

        $roles = Role::query()
            ->where('is_admin', 1)
            ->whereHas('type', function (Builder $query) {
                $query->where('alias', 'app');
            })->get()
            ->pluck('id');

        $app_type_id = Type::findByAlias('app')->id;

        NotificationEvent::where('type_id', $app_type_id)->get()->map(function ($event) use ($channels, $roles) {
            $notification_setting = NotificationSetting::query()->create([
                'notification_event_id' => $event->id,
                'notify_by' => $channels
            ]);

            $notification_setting->audiences()->saveMany([
                new NotificationAudience([
                    'audience_type' => 'roles',
                    'audiences' => $roles
                ])
            ]);
        });
        $this->enableForeignKeys();
    }
}
