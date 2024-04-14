<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $user_id = Auth::user()->id;
        $contacts = Contacts::Latest()->where('user_id',$user_id)->get();
        return view ('dashboard',[
            'contacts' => $contacts
        ]);
    }
}
