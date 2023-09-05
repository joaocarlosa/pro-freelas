<?php

namespace App\Http\Livewire;

use App\Models\Projeto;
use Livewire\Component;

class Projetos extends Component
{
    public function render()
    {
        $projetos = Projeto::all()->sortDesc();
        return view('pages.projetos',['projetos' => $projetos]);
    }
}
