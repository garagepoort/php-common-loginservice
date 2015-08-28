<?php

namespace com\bendani\phpcommon\loginservice\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

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
        $this->package('bendani/php-common/login-service', 'common-login');

        $view = View::make('common-login::login-form');

        View::addNamespace('common-login', __DIR__.'/../views');
    }


}