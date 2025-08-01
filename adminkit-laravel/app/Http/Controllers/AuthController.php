<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signin()
    {
        return view('pages-sign-in');
    }

    public function signup()
    {
        return view('pages-sign-up');
    }
}
