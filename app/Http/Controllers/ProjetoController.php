<?php

namespace App\Http\Controllers;

use App\Mail\NovoProjetoEmail;
use App\Models\Notificacao;
use App\Models\Projeto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ProjetoController extends Controller
{
    public function salvarProjeto(Request $request)
    {

        $user = Auth::user();
        $data = $request->validate([
            'titulo' => 'required|min:10',
            'descricao' => 'required|min:150',
            //'arquivo' => 'required',
            'categoria' => 'required',
            'nivelExperiencia' => 'required',
            'prazo' => 'required',
            'investimentoInicio' => 'numeric',
            'investimentoFim' => 'numeric',

        ]);

        $data['link'] = substr(Hash::make($data['titulo'] . rand(10000, 99999)), -11, 11);

        $projeto = Projeto::create([
            'titulo' => $data['titulo'],
            'descricao' => $data['descricao'],
            'autor_id' => $user->id,
            'arquivo',
            'categoria_id' => $data['categoria'],
            'link' => $data['link'],
            'prazo' => $data['prazo'],
            'nivel_experiencia'  => $data['nivelExperiencia'],
            'investimento_inicio' => $data['investimentoInicio'],
            'investimento_fim' => $data['investimentoFim'],
        ]);

        $usuarios = User::all(['email']);

        $freelas = User::where('profile', 'freelancer')->get()->pluck('id');

        foreach ($freelas as $usuarioId) {
            Notificacao::create([
                'usuario_id' => $usuarioId,
                'projeto_id' => $projeto->id,
                'tipo' => 'projeto',
            ]);
        }

        $data["email"] = "atendimento@profreelas.com";
        $data["title"] = "Novo projeto publicado";
        $data['projeto'] = $projeto;

        Mail::send('mail.novo-projeto', $data, function ($message) use ($data) {
            $message->to($data["email"])
                ->subject($data["title"]);
        });


        foreach ($usuarios as $usuario) {
            Mail::to($usuario->email)->send(new NovoProjetoEmail($user));
        }

        return redirect('/projetos')->with('success', 'Projeto publicado com sucesso.');
    }
}
