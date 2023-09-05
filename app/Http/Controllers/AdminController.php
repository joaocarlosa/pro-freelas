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

class AdminController extends Controller
{
    public function projetos(Request $request)
    {
        $user = Auth::user();
        $projetos = Projeto::all()->sortDesc();
        return view('pages.admin',['projetos' => $projetos]);
    }
}
