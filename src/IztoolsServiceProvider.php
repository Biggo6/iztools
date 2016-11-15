<?php

namespace Biggo6\Iztools;

use Illuminate\Support\ServiceProvider;

class IztoolsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // Route
        include __DIR__.'/routes.php';
        // Language
        $this->loadTranslationsFrom( __DIR__.'/Lang', 'iztools');

        $this->publishes([
            __DIR__.'/Config/iztools.php' => config_path('iztools.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        // View
        $this->loadViewsFrom(__DIR__ . '/Views', 'iztools');
        // Config
        $this->mergeConfigFrom( __DIR__.'/Config/iztools.php', 'iztools');
        $this->app['iztools'] = $this->app->share(function($app){
            return new Iztools;
        });
    }
}
