<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'phone' => ['required', 'numeric', 'digits:11', 'unique:'.Contacts::class],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Contacts::class],
        ]);
        Contacts::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return redirect('contacts')->with('message', 'New Contact Added.');
    }


    public function index()
    {
        $user_id = Auth::user()->id;
        $contacts = Contacts::Latest()->where('user_id',$user_id)->get();
        return view ('contacts',[
            'contacts' => $contacts
        ]);
    }

    public function add()
    {
        return view('add-contacts');
    }
}
