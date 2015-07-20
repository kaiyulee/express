<?php

namespace App\Http\Controllers;

class MessageController extends Controller
{
    public function messageboard()
    {
        return view('messageboard');
    }
}
