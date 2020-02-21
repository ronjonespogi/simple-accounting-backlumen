<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

        // $this->app->register(\Tymon\JWTAuth\Providers\LumenServiceProvider::class);
    }
    public function boot()
    {
        Schema::defaultStringLength(191);

        if($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
