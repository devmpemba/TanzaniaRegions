<?php

namespace SalimMbise\TanzaniaRegions;

use Illuminate\Support\ServiceProvider;

class TanzaniaRegionsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../data/regions_and_districts.json' => storage_path('app/regions_and_districts.json'),
        ], 'tanzania-regions');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(TanzaniaRegions::class, function ($app) {
            return new TanzaniaRegions();
        });
    }
}
