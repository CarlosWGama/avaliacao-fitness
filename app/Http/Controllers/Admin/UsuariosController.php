<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Rules\Cpf;

/**
 * Controller responsável pela manipulação dos dados do usuários 
 */
class UsuariosController extends AdminController {
    
    
    public function __construct() {
        $this->dados['menu'] = 'usuarios';
    }

    /** Lista o usuários */
    public function index(Request $request) {

        $this->dados['buscar'] = $request->buscar;
        $usuario = Usuario::orderBy('nome');
        if ($request->buscar)
            $usuario = $usuario->where('nome', 'like', '%'.$request->buscar.'%')
                                ->orWhere('email', 'like', '%'. $request->buscar.'%');
        $this->dados['usuarios'] = $usuario->simplePaginate(10)->withQueryString();
        
        return view('admin.usuarios.listar', $this->dados);
    }

    /** 
     * Abre a tela cadastrar novo usuário
     */
    public function novo() {
        $this->dados['usuario'] = new Usuario;
        return view('admin.usuarios.novo', $this->dados);
    }

    /** 
     * Tenta salvar um novo usuário
     */
    public function cadastrar(Request $request) {
        $request->validate([
            'nome'  => 'required',
            'senha'  => 'required|min:6',
            'email' => 'required|email|unique:usuarios,email',
        ]);
        $dados = $request->all();
        $dados['senha'] = bcrypt($dados['senha']);
        Usuario::create($dados);

        return redirect()->route('admin.usuarios.listar')->with(['sucesso' => 'Usuário cadastrado com sucesso']);
    }

    /** 
     * Abre a tela de editar usuário
     * @param $id id do usuário
     */
    public function edicao(int $id) {
        $this->dados['usuario'] = Usuario::findOrFail($id);
        return view('admin.usuarios.edicao', $this->dados);
    }
    
    /** Tenta editar um usuário e salvar no banco
     * @param $id id do usuário
     */
    public function editar(Request $request, int $id) {
        $request->validate([
            'nome'  => 'required',
            'email' => 'required|email|unique:usuarios,email,'.$id,
        ]);

        $dados = $request->except(['_token']);
        if (!empty($dados['senha']))
            $dados['senha'] = bcrypt($dados['senha']);
        else unset($dados['senha']);
        Usuario::where('id', $id)->update($dados);

        return redirect()->route('admin.usuarios.listar')->with(['sucesso' => 'Usuário editado com sucesso']);
    }
    
    /** Remove um usuário
     * @param $id id do usuário
     */
    public function excluir(int $id) {
        Usuario::destroy($id);
        return redirect()->route('admin.usuarios.listar')->with('sucesso', 'Usuário excluido');
    }
}
