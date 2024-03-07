<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmergencyController extends Controller
{
    public function index() {
        return view ('emergency');
    }
    
    public function call(){
        return view('emergency-call');
    }
}
