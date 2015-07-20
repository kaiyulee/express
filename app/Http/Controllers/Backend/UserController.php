<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function signIn()
    {
        return 'user login';
    }

    public function signUp()
    {
        return 'user signed up';
    }

    public function home()
    {
        return 'user home';
    }
}
