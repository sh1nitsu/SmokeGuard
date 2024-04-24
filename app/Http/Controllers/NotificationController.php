<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function store(){
         Notification::create([
            'value' => 'value',
        ]);
        return response()->json(['message' => 'Notification created successfully.']);
    }
}
