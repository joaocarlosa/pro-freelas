<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class UsuarioController extends Controller
{
    public function salvarPerfil(Request $request)
    {
        $dados = $request->validate([
            'nome' => 'required',
            'sobrenome' => 'required',
            'sexo' => 'required',
            'telefone' => 'required',
            'area_atuacao' => 'required',
            'tempo_xp' => 'required|numeric',
            'descricao' => 'required',
            'especialidades' => 'array',
            'habilidades' => 'array',
            'country' => 'required',
        ]);

        $usuario         = User::findOrFail(Auth::id());
        $usuario->sobrenome   = $dados['sobrenome'];
        $usuario->phone   = $dados['telefone'];
        $usuario->nome   = $dados['nome'];
        $usuario->sexo   = $dados['sexo'];
        $usuario->area_atuacao   = $dados['area_atuacao'];
        $usuario->tempo_xp   = $dados['tempo_xp'];
        $usuario->descricao   = $dados['descricao'];
        $usuario->especialidades  = implode(',',$dados['especialidades'] ?? []);
        $usuario->habilidades  = implode(',',$dados['habilidades'] ?? []);
        $usuario->country = $dados['country'];
        $usuario->save();

        return redirect('/perfil')->with('success', 'Perfil salvo com sucesso.');
    }

    public function mostrarPerfil(Request $request)
    {
        return view('pages.perfil-freelancer',[]);
    }

    public function cadastro(Request $request)
    {
        return view('pages.cadastro');
    }

    public function cadastrar(Request $request)
    {

        $data = $request->all();

        $emailExiste    = User::where('email',$data['email'])->count();
        $telefoneExiste = User::where('phone',$data['phone'])->count();

        $request->validate([
           'sobrenome' => 'required',
        ]);

        if($emailExiste)
        {
            Session::flash('message', 'Já existe um usuario cadastrado com essse email, tente outro');
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }

        if($telefoneExiste)
        {
            Session::flash('message', 'Já existe um usuario cadastrado com essse número de telefone, tente outro');
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }

        if($data['password'] != $data['confirm_password'])
        {
            Session::flash('message', 'As senhas não estão iguais, tente novamente.');
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }

        /*$data = $request->validate([
            'email' => 'required',
            'firstName' => 'required',
            'phone' => 'required',
            'profile' => 'required',
            'password' => 'required|same:passwordConfirmation|min:6',
        ]);*/


        $user = User::create([
            'nome' => $data['firstName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'remember_token' => Str::random(10),
            'phone' => $data['phone'],
            'sobrenome' => $data['sobrenome'],
            'profile' => $data['profile']
        ]);

        auth()->login($user);

        return redirect('/');
    }
}
