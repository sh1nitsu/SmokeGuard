<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function add()
    {
        return view('add-room');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:2', 'max:255'],
        ]);
        Rooms::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'smoke' => 'no value yet',
            'value' => 'no value yet',
        ]);

        return redirect('add-room')->with('message', 'New room Added.');
    }
}
