<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    public function render()
    {
        $data = User::withCount('contacts')->where('role','client')->get();
        return view('livewire.user-table',[
            'data' => $data,
        ]);
    }
}
