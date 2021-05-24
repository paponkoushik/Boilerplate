<?php
namespace Database\Seeders;


use App\Models\App\SamplePage\KanbanView\Stage;
use App\Models\App\SamplePage\KanbanView\Task;
use App\Models\App\SamplePage\Report;
use Database\Seeders\App\CrudTableSeeder;
use Database\Seeders\App\NotificationChannelTableSeeder;
use Database\Seeders\App\NotificationEventTableSeeder;
use Database\Seeders\App\NotificationSettingsSeeder;
use Database\Seeders\App\NotificationTemplateSeeder;
use Database\Seeders\App\PermissionChildAppSeeder;
use Database\Seeders\App\SettingTableSeeder;
use Database\Seeders\App\SocialLinkSeeder;
use Database\Seeders\App\StageTableSeeder;
use Database\Seeders\App\UserDemoSeeder;
use Database\Seeders\Auth\PermissionRoleTableSeeder;
use Database\Seeders\Auth\PermissionTableSeeder;
use Database\Seeders\Auth\TypeSeeder;
use Database\Seeders\Auth\UserRoleTableSeeder;
use Database\Seeders\Auth\UserTableSeeder;
use Database\Seeders\Builder\CustomFieldTypeSeeder;
use Database\Seeders\Status\StatusSeeder;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use TruncateTable, DisableForeignKeys;

    /**
     * Seed the application's database.
     */
    public function run()
    {
        Model::unguard();
        $this->disableForeignKeys();

        Report::factory(4)->create();
        Stage::factory(7)->has(Task::factory()->count(4))->create();
        $this->call(StatusSeeder::class);
        $this->call(SocialLinkSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(PermissionChildAppSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(UserRoleTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(CustomFieldTypeSeeder::class);
        $this->call(NotificationChannelTableSeeder::class);
        $this->call(NotificationEventTableSeeder::class);
        $this->call(NotificationSettingsSeeder::class);
        $this->call(NotificationTemplateSeeder::class);
        $this->call(CrudTableSeeder::class);
        $this->call(UserDemoSeeder::class);
        $this->enableForeignKeys();
        Model::reguard();
    }
}
