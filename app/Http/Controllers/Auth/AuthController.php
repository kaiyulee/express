<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Symfony\Component\HttpFoundation\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectPath = '/';
    protected $redirectTo = '/';
    protected $redirectAfterLogout = 'auth/login';
    protected $loginPath = 'auth/login';
    protected $username = 'email';

    /**
     * Create a new authentication controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|max:255|unique:i_users',
            'email' => 'required|email|max:255|unique:i_users',
            'password' => 'required|confirmed|min:6',
            'iaccept' => 'accepted'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     *
     * @return User
     *
     */
    protected function create(array $data)
    {
        $timestamp = date('Y-m-d H:i:s');

        return User::create([
                                'username' => $data['username'],
                                'email' => $data['email'],
                                'password' => bcrypt($data['password']),
                                'website' => '',
                                'login_at' => $timestamp,
                                'login_ip' => $data['login_ip'],
                                'remember_token' => '',
                                'created_at' => $timestamp,
                                'updated_at' => $timestamp
                            ]);
    }
}
