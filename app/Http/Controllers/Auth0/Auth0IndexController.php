<?php

namespace App\Http\Controllers\Auth0;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Auth0IndexController extends Controller
{
     /**
     * Redirect to the Auth0 hosted login page
     * 
     * @return mixed
     */
    public function login()
    {


        return App::make('auth0')->login(
            null,
            null,
            ['scope' => 'openid name email email_verified'],
            'code'
        );
    }

    /**
     * Log out of Auth0
     * 
     * @return mixed
     */
    public function logout()
    {
        \Auth::logout();
        $logoutUrl = sprintf(
            'https://%s/v2/logout?client_id=%s&returnTo=%s',
            env('AUTH0_DOMAIN'),
            env('AUTH0_CLIENT_ID'),
            env('APP_URL'));
        return  \Redirect::intended($logoutUrl);
    }
}
