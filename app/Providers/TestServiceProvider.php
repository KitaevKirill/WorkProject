<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Service;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Service::class, function () {
            return new Service('api-key');
        });
    }
}
