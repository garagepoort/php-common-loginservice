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
            return Auth::user();
        }else{
            return Response::json(array(
                'code'      =>  401,
                'message'   =>  'Login failed: username password combination incorrect.'
            ), 401);
        }
    }

    public function logOut(){
        Auth::logout();
        return Response::json('log out succeeded', 200);
    }

    public abstract function redirectAfterLogin();
}