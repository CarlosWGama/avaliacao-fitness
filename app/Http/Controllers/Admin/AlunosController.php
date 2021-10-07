<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunosController extends AdminController {

    public function __construct() {
        $this->dados['menu'] = 'alunos';
        $this->dados['tinyMCE'] = true;

    }

    //** Lista todos os alunos cadastrados */
    public function listar(Request $request) {
        $this->dados['buscar'] = $request->buscar;
        $aluno = Aluno::orderBy('nome');
        if ($request->buscar)
            $aluno = $aluno->where('nome', 'like', '%'.$request->buscar.'%')
                                ->orWhere('email', 'like', '%'. $request->buscar.'%')
                                ->orWhere('telefone', 'like', '%'. $request->buscar.'%')
                                ->orWhere('endereco', 'like', '%'. $request->buscar.'%');
        $this->dados['alunos'] = $aluno->simplePaginate(10)->withQueryString();
        
        return view('admin.alunos.listar', $this->dados);
    }

    //** Abre tela de cadastro */
    public function novo(Request $request) {
        $this->dados['aluno'] = new Aluno;
        $this->dados['aluno']['estado'] = 'AL';
        return view('admin.alunos.novo', $this->dados);
    }

    //** Realiza o cadastro */
    public function cadastrar(Request $request) {
        $request->validate([
            'nome'              => 'required',
            'email'             => 'required|email',
            'data_nascimento'   => 'required|date',
            'telefone'          => 'required',
        ]);
        $dados = $request->all();
        $aluno = Aluno::create($dados);

        if ($request->hasFile('foto')) {
            $extensao = $request->foto->extension();
            $aluno->foto = $nomeArquivo = 'foto_'.$aluno->id.'.'.$extensao;
            $request->foto->storeAs('public/alunos', $nomeArquivo);
            $aluno->save();
        }

        return redirect()->route('admin.alunos.listar')->with(['sucesso' => 'Aluno cadastrado com sucesso']);
    }

    //** Abre tela de edição */
    public function edicao(Request $request, int $id) {
        $this->dados['aluno'] = Aluno::findOrFail($id);
        return view('admin.alunos.edicao', $this->dados);
    }

    //** Realiza a edição */
    public function editar(Request $request, int $id) {
        $aluno = Aluno::findOrFail($id);
        $request->validate([
            'nome'      => 'required',
            'email'     => 'required|email',
            'data_nascimento'   => 'required|date',
            'telefone'  => 'required',
        ]);

        $dados = $request->except(['_token', 'foto']);
        $aluno->fill($dados);

        if ($request->hasFile('foto')) {
            $extensao = $request->foto->extension();
            $aluno->foto = $nomeArquivo = 'foto_'.$aluno->id.'.'.$extensao;
            $request->foto->storeAs('public/alunos', $nomeArquivo);
        }
        $aluno->save();

        return redirect()->route('admin.alunos.listar')->with(['sucesso' => 'Aluno editado com sucesso']);
    }

    //** Realiza a remoção */
    public function excluir(Request $request, int $id) {
        Aluno::destroy($id);
        return redirect()->route('admin.alunos.listar')->with('sucesso', 'Aluno excluido');
    }

    //** Realiza a tela de visualização */
    public function visualizar(Request $request, int $id) {
        $this->dados['aluno'] = Aluno::findOrFail($id);
        return view('admin.alunos.visualizar', $this->dados);

    }
}
