<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class NovoProjeto extends Component
{
    public function render()
    {
        return view('pages.novo-projeto');
    }
}
