<?php

namespace App\Http\Controllers;

use App\Models\Notificacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificacaoController extends Controller
{
    public function verificarNotificacoes(Request $request)
    {
        $usuario = Auth::user();
        $notificacoes = Notificacao::with('projeto')->where('usuario_id', $usuario->id)->where('tipo', 'projeto')->take(1)->get()->sortDesc();
        return response()->json($notificacoes);
    }

    public function removerNotificacao(Request $request)
    {
        $dados = $request->validate([
            'projetoId' => 'required|numeric',
            'usuarioId' => 'required|numeric',
        ]);

        Notificacao::where('projeto_id', $dados['projetoId'])->where('usuario_id', $dados['usuarioId'])->delete();

        return response()->json(['ok' => true]);
    }
}
