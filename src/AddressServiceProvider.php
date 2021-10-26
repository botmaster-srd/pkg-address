<?php

namespace Botmaster\Address;

use Illuminate\Support\ServiceProvider;

class AddressServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes/web.php';
        // register our controller
        // $this->app->make('Botmaster\Address\Http\Controllers');
        $this->loadViewsFrom(__DIR__.'/views', 'address');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->mergeConfigFrom(
            __DIR__.'/config/address.php', 'address'
        );

        $this->publishes([
            __DIR__.'/config/address.php' => config_path('address.php'),
        ]);

        $this->publishes([
            __DIR__.'/views' => $this->app->resourcePath('views/botmaster/address'),
        ]);

        $this->publishes([
            __DIR__ . '/Http/Controllers/' => $this->app->basePath('app/Http/Controllers/Botmaster'),
        ]);

    }
}
