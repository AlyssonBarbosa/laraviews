<?php

namespace Alysson\LaravelViews;

use Illuminate\Support\ServiceProvider;

class LaraviewsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/views/crud' => $this->app->resourcePath() . '/views/crud',
        ], 'lara-views');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
