<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Perfil extends Component
{
    public User $user;
    public $showSavedAlert = false;
    public $showDemoNotification = false;

    public function rules() {

    }

    public function mount() { $this->user = auth()->user(); }

    public function save()
    {
        $this->validate();

        $this->user->save();

        $this->showSavedAlert = true;
    }

    public function render()
    {
        $usuario = Auth::user();
        return view('pages.perfil',['usuario' => $usuario]);
    }
}
