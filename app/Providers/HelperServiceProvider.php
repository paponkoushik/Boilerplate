<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

/**
 * Class HelperServiceProvider.
 */
class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     */
    public function boot()
    {
        $this->includeHelper('Core');
        $this->includeHelper('App');
    }
    public function includeHelper($parent, $child = 'Global')
    {
        $rdi = new RecursiveDirectoryIterator(app_path('Helpers'.DIRECTORY_SEPARATOR.$parent.DIRECTORY_SEPARATOR.$child));
        $it = new RecursiveIteratorIterator($rdi);
        while ($it->valid()) {
            if (
                ! $it->isDot() &&
                $it->isFile() &&
                $it->isReadable() &&
                $it->current()->getExtension() === 'php' &&
                strpos($it->current()->getFilename(), 'Helper')
            ) {
                require $it->key();
            }
            $it->next();
        }
    }
}
