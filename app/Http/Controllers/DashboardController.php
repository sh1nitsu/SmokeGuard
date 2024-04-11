<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $contacts = Contacts::Latest()->get();
        return view ('dashboard',[
            'contacts' => $contacts
        ]);
    }
}
