<?php

namespace Farhatabbas\Faye;

use Illuminate\Support\ServiceProvider;

class FayeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Config/faye.php' => config_path('faye.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     */
    public function register()
    {

        // Config
        $this->mergeConfigFrom( __DIR__.'/Config/faye.php', 'faye');

        $this->app['faye'] = $this->app->share(function ($app) {
          return new Faye;
        });
    }
}
