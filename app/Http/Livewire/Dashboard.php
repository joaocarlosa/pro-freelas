<?php

namespace App\Http\Livewire;

use App\Models\Projeto;
use App\Models\Proposta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $user = Auth::user();
        $data['projetos'] = Projeto::all()->sortDesc();
        $data['meusProjetos'] = $user->meusProjetos;

        $minhasPropostas = Proposta::where('autor_id',$user->id)->count();
        $data['minhasPropostas'] = $minhasPropostas;


        $propostasRecebidas = DB::table('propostas')
        ->leftJoin('projetos', 'propostas.projeto_id', '=', 'projetos.id')
        ->leftJoin('users', 'projetos.autor_id', '=', 'users.id')
        ->where('users.id', $user->id)
        ->orderBy('propostas.created_at', 'DESC')
        ->get(['propostas.id','propostas.valor','propostas.aumento','propostas.autor_id','users.nome','users.sobrenome','propostas.projeto_id','projetos.status']);
        
        //dd($propostasRecebidas);

        $data['propostasRecebidas'] = $propostasRecebidas;
        $data['usuario'] = $user;

        if ($user->profile == 'freelancer') {
            return view('pages.freelancer', $data);
        } elseif ($user->profile == 'cliente') {
            return view('pages.cliente', $data);
        }
    }
}
