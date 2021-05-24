<?php

namespace App\Providers;

use App\Http\Composer\SidebarComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

/**
 * Class ComposerServiceProvider.
 */
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     */
    public function boot()
    {
        View::composer('layouts.includes.sidebar', SidebarComposer::class);
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        //
    }
}
