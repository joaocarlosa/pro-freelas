<?php

namespace App\Http\Livewire;

use App\Models\Projeto;
use Jorenvh\Share\ShareFacade;
use Livewire\Component;

class ResumoProjeto extends Component
{
    public function render()
    {
        $idProjeto = request('id');
        $projeto = Projeto::find($idProjeto);


        $shareButtons = ShareFacade::page(
            'https://profreelas.com',
            'Compartilhar esse projeto',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();

        return view('pages.resumo',['projeto' => $projeto, 'shareComponent' => $shareButtons]);
    }
}
