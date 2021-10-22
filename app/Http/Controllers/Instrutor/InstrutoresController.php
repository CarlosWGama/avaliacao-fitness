<?php

namespace App\Http\Controllers\Instrutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Instrutor;
use App\Rules\Cpf;

/**
 * Controller responsável pela manipulação dos dados do usuários 
 */
class InstrutoresController extends InstrutorController {
    
    
    public function __construct() {
        $this->dados['menu'] = 'instrutores';
    }

    /** Lista o usuários */
    public function index(Request $request) {

        $this->dados['buscar'] = $request->buscar;
        $usuario = Instrutor::orderBy('nome');
        if ($request->buscar)
            $usuario = $usuario->where('nome', 'like', '%'.$request->buscar.'%')
                                ->orWhere('email', 'like', '%'. $request->buscar.'%');
        $this->dados['instrutores'] = $usuario->simplePaginate(10)->withQueryString();
        
        return view('instrutor.instrutores.listar', $this->dados);
    }

    /** 
     * Abre a tela cadastrar novo usuário
     */
    public function novo() {
        $this->dados['instrutor'] = new Instrutor;
        return view('instrutor.instrutores.novo', $this->dados);
    }

    /** 
     * Tenta salvar um novo usuário
     */
    public function cadastrar(Request $request) {
        $request->validate([
            'nome'  => 'required',
            'senha'  => 'required|min:6',
            'email' => 'required|email|unique:instrutores,email',
        ]);
        $dados = $request->all();
        $dados['senha'] = bcrypt($dados['senha']);
        Instrutor::create($dados);

        return redirect()->route('instrutor.instrutores.listar')->with(['sucesso' => 'Instrutor cadastrado com sucesso']);
    }

    /** 
     * Abre a tela de editar usuário
     * @param $id id do usuário
     */
    public function edicao(int $id) {
        $this->dados['instrutor'] = Instrutor::findOrFail($id);
        return view('instrutor.instrutores.edicao', $this->dados);
    }
    
    /** Tenta editar um usuário e salvar no banco
     * @param $id id do usuário
     */
    public function editar(Request $request, int $id) {
        $request->validate([
            'nome'  => 'required',
            'email' => 'required|email|unique:instrutor,email,'.$id,
        ]);

        $dados = $request->except(['_token']);
        if (!empty($dados['senha']))
            $dados['senha'] = bcrypt($dados['senha']);
        else unset($dados['senha']);
        Instrutor::where('id', $id)->update($dados);

        return redirect()->route('instrutor.instrutores.listar')->with(['sucesso' => 'Instrutor editado com sucesso']);
    }
    
    /** Remove um usuário
     * @param $id id do usuário
     */
    public function excluir(int $id) {
        Instrutor::destroy($id);
        return redirect()->route('instrutor.instrutores.listar')->with('sucesso', 'Instrutor excluido');
    }
}
