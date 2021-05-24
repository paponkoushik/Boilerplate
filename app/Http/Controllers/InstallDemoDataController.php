<?php


namespace App\Http\Controllers;


use App\Helpers\traits\SetIiiTrait;
use App\Setup\Manager\StorageManager;
use Illuminate\Support\Facades\Artisan;

class InstallDemoDataController extends Controller
{
    use SetIiiTrait;

    public function run()
    {
        if (env('INSTALL_DEMO_DATA')) {
            $this->setMemoryLimit('500M');
            $this->setExecutionTime(500);

            Artisan::call('clear-compiled');
            Artisan::call('view:clear');

            Artisan::call('config:clear');
            Artisan::call('cache:clear');

            Artisan::call('migrate:fresh --force --seed');

            Artisan::call('storage:link');
            Artisan::call('queue:restart');
            resolve(StorageManager::class)->link();
        }

        return true;
    }
}