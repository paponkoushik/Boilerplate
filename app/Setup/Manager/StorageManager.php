<?php


namespace App\Setup\Manager;


use Illuminate\Support\Facades\Artisan;

class StorageManager
{
    public function link()
    {
        $exploded_path = explode('/', base_path());
        if (end($exploded_path) === 'src') {
            $this->handle();
        }elseif (!file_exists(public_path('storage'))) {
            Artisan::call('storage:link');
        }
    }

    public function handle()
    {
        foreach ($this->links() as $link => $target) {
            if (strpos($link, 'src/public/')) {
                $link = str_replace('src/public/', '', $link);
                if (!file_exists($link)) {
                    app()->make('files')->link($target, $link);
                }
            }
        }
    }

    protected function links()
    {
        return $this->laravel['config']['filesystems.links'] ??
            [public_path('storage') => storage_path('app/public')];
    }
}