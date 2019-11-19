<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view ('admin.login.index');
    }

    public function logar(Request $req){
        $dados = $req->all();
        if(Auth::attempt(['email' => $dados['email'], 'password' => $dados['senha']])){
            return redirect()->route('index');
        }
        return redirect()->route('index');
    }

    public function sair(){
        Auth::logout();
        return redirect()->route('index');
    }
}
