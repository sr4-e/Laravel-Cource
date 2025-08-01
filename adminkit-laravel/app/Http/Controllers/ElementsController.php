<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElementsController extends Controller
{
    public function alerts()
    {
        return view('ui-alerts');
    }

    public function buttons()
    {
        return view('ui-buttons');
    }

    public function cards()
    {
        return view('ui-cards');
    }

    public function general()
    {
        return view('ui-general');
    }

    public function grid()
    {
        return view('ui-grid');
    }

    public function typography()
    {
        return view('ui-typography');
    }
}
