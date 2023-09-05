<?php

namespace App\Http\Controllers;

use App\Models\Proposta;
use App\Models\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropostaController extends Controller
{
    public function enviarProposta(Request $request)
    {
        $user = Auth::user();

        $dados = $request->validate([
            'valor' => 'min:1',
            'projetoId' => 'numeric',

        ]);
        
        $dados['valor'] = str_replace(".","",$dados['valor']);
        $dados['valor'] = str_replace(",",".",$dados['valor']);
        

        if(Proposta::where('autor_id',$user->id)->where('projeto_id',$dados['projetoId'])->exists())
        {
            return redirect()->back()->with('error', 'Você já enviou uma proposta para este projeto.');
        }

        $aumento =  ( 20 / 100 ) * (int)$dados['valor'];

        $total = (int)$dados['valor'];

        $proposta = new Proposta();
        $proposta->descricao = "Proposta";
        $proposta->valor = $total;
        $proposta->autor_id = $user->id;
        $proposta->projeto_id = $dados['projetoId'];
        $proposta->aumento = $aumento;
        $proposta->save();

        return redirect()->back()->with('success', 'Sua proposta foi enviada com sucesso.');
    }
    
    public function aceitarProposta(Request $request)
    {
        $proposta = Proposta::find($request->id);
        
        $projeto = Projeto::find($proposta->projeto_id);
        $projeto->status = 'Fechado';
        $projeto->save();
        
        return redirect()->back()->with('success', 'A proposta foi aceita com sucesso.');
    }
}
