<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index() 
    {
        return view ('contacts');
    }

    public function add() 
    {
        return view('add-contacts');
    }
}
