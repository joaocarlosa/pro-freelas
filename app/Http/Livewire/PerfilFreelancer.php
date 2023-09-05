<?php

namespace App\Http\Livewire;

use App\Models\Avaliacao;
use App\Models\User;
use Livewire\Component;

class PerfilFreelancer extends Component
{
    public function render()
    {
        $idUsuario = request('id');
        $usuario = User::find($idUsuario);
        if($usuario->profile != "freelancer")
        {
            return redirect('/');
        }
        else
        {
            $avaliacoes = Avaliacao::where('usuario_id', $idUsuario)->get();
            return view('livewire.perfil-freelancer',['usuario' => $usuario, 'avaliacoes' => $avaliacoes]);
        }
    }
}
