<?php

namespace Bendani\PhpCommon\LoginService\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

abstract class LoginController extends BaseController
{
    public abstract function getLoginPage();

    public function doLogin(){
        $userdata = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
        if(Auth::attempt($userdata)){
            $this->redirectAfterLogin();
        }else{
            return Redirect::to('login')
                ->with('message', 'Login failed: username password combination incorrect.');
        }
    }

    public function logOut(){
        Auth::logout();
        return Redirect::to('login');
    }

    public abstract function redirectAfterLogin();
}