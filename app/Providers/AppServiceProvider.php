<?php

namespace App\Providers;

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Fideloper\Proxy\TrustedProxyServiceProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(IdeHelperServiceProvider::class);
        }

        if (env('APP_TRUST_PROXIES', false)) {
            // Enable Heroku hosted application to trust proxies correctly
            $this->app->register(TrustedProxyServiceProvider::class);
        }
    }
}
