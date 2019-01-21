<?php
/**
 * Created by PhpStorm.
 * User: User1
 * Date: 21.01.2019
 * Time: 22:43
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Language;

class LanguageProvider extends ServiceProvider
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
        $this->app->singleton(Language::class, function ($app) {
            return new Language($app['config']['app.locale']);
        });
    }
}