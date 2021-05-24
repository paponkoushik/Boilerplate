<?php
namespace Database\Seeders\Status;

use App\Models\Core\Status;
use Database\Seeders\Traits\DisableForeignKeys;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
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
        Status::query()->truncate();
        $statuses = [
            [
                'name' => 'status_active',
                'type' => 'user',
                'class' => 'success'
            ],
            [
                'name' => 'status_inactive',
                'type' => 'user',
                'class' => 'danger'
            ],
            [
                'name' => 'status_invited',
                'type' => 'user',
                'class' => 'purple'
            ],
        ];

        Status::query()->insert($statuses);

        $this->enableForeignKeys();
    }
}
