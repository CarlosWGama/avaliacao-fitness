<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\RecuperarSenha;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Firebase\JWT\JWT;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

/**
 * Tela resposável por manipular as ações das telas de Login
 */
class LoginController extends Controller {
    
    /** Abre a tela Inicial de Login */
    public function index() {
        return view('admin.login.login');
    }

    /** Faz com o que o usuário tente realizar o login */
    public function logar(Request $request) {
        $usuario = Usuario::where('email', $request->email)->first();
        if ($usuario != null && Hash::check($request->senha, $usuario->senha) ) {
            session(['usuario' => $usuario]);
            return redirect()->route('admin.dashboard');
        } else
            return redirect()->back()->with(['erro' => 'Login ou Senha incorreta']);
    }

    /** Função para deslogar o usuário */
    public function logout(Request $request) {
        $request->session()->flush();
        return redirect()->route('login');
    }

    //================================== RECUPERAR SENHA ===================================//
    /** Abre a tela Inicial de Login */
    public function recuperarSenha() {
        return view('admin.login.recuperar-senha');
    }

    public function solicitarNovaSenha(Request $request) {
        $usuario = Usuario::where('email', $request->email)->first();
        //Não encontrou
        if (!$usuario) return redirect()->back()->with(['erro' => 'Usuario não encontrado']);

        $token = JWT::encode([
            'id'    => $usuario->id,
            'exp'   => time() + (60*60*2) //Link expira em 2h
        ], config('jwt.senha'));

        Mail::to($usuario->email)->send(new RecuperarSenha($usuario, $token));

        return view('admin.login.senha-solicitada');
    }

    /** Define a nova Senha */
    public function novaSenha(Request $request) {
        try {
            $dados = JWT::decode($request->token, config('jwt.senha'), ['HS256']);
            if ($dados->exp < time()) abort(404); //Link expirou
            
            return view('admin.login.definir-nova-senha', ['token' => $request->token]);

        } catch(\Exception $e) {
            abort(404);
        } 
    }

    /** Salva o recuperar senha */
    public function salvarNovaSenha(Request $request) {
        //Valida a senha
        $request->validate([
            'senha'  => 'required|min:6'
        ]);

        try {
            //Valida o token
            $dados = JWT::decode($request->token, config('jwt.senha'), ['HS256']);
            if ($dados->exp < time()) abort(404); //Link expirou
            
            Usuario::where('id', $dados->id)->update(['senha' => bcrypt($request->senha)]);

            return view('admin.login.senha-recuperada');
        } catch(\Exception $e) {
            echo $e->getMessage();die;
            abort(404);
        }    
    }
}
