<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempController extends Controller
{
    public function index() {
        return view ('temp');
    }

    public function temp()
    {
        return view('kitchen-temp');
    }

    public function smoke()
    {
        return view('kitchen-smoke');
    }
}
