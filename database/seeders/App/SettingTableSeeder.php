<?php
namespace Database\Seeders\App;

use App\Models\Core\Setting\Setting;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        Setting::query()->where('context', 'app')->delete();
        Setting::query()->insert(
            config('settings.app')
        );
    }
}
