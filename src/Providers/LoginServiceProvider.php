<?php

namespace Bendani\PhpCommon\LoginService\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class LoginServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/../../public' => public_path('vendor/bendani/php-common/login-service'),], 'public');

        $this->loadViewsFrom(__DIR__.'/../views', 'bendani/php-common/login-service');
    }


}