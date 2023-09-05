<?php

namespace App\Http\Livewire;

use App\Models\Proposta;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Propostas extends Component
{
    public function render()
    {
        $user = Auth::user();
        $propostas = Proposta::where('autor_id',$user->id)->get()->sortDesc();
        return view('pages.propostas',['propostas' => $propostas]);
    }
}
