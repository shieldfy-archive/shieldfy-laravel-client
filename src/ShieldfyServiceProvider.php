<?php

namespace Shieldfy\ShieldfyLaravelClient;

use Illuminate\Support\ServiceProvider;

class ShieldfyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__ . '/../vendor/autoload.php';
        $this->publishes([
            __DIR__.'config/shieldfy.php' => config_path('shieldfy.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
