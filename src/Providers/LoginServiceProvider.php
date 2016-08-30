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
//        $this->package('bendani/php-common/login-service', 'common-login');
        $this->package('bendani/php-common/login-service');

        $this->publishes([__DIR__.'/../../public' => public_path('vendor/bendani/php-common/login-service'),], 'public');

//        $view = View::make('common-login::login-form');

        $this->loadViewsFrom(__DIR__.'/../views', 'bendani/php-common/login-service');
    }


}