<?php

namespace Alysson\Laraviews;

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
            __DIR__ . '/views/index.blade.php' => $this->app->resourcePath() . '/views/crud/index.blade.php',
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
