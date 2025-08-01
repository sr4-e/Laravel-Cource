<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IconsController extends Controller
{
    public function icons()
    {
        return view('icons-feather');
    }
}
