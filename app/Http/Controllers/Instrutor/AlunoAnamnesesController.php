<?php

namespace App\Http\Controllers\Instrutor;

use App\Models\Aluno;
use App\Models\AlunosAnamnese;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class AlunoAnamnesesController extends InstrutorController {
    

    //** Abre a tela para cadastro de anamnese  */
    public function nova(Request $request, int $alunoID) {
        $this->formSteps();
        $this->tinyMCE();
        $this->dados['aluno'] = Aluno::findOrFail($alunoID);
        $this->dados['anamnese'] = new AlunosAnamnese;
        return view('instrutor.alunos.anamneses.nova', $this->dados);
    }

    //** Cadastra uma nova Anamnese **/
    public function cadastrar(Request $request, int $alunoID) {
        $request->validate([
            'rf_historico_clinico'      => 'required', 
            'rf_historico_familiar'     => 'required', 
            'rf_historico_piscossocial' => 'required', 
            'rf_bem_estar'              => 'required', 
            'rf_atividades_diarias'     => 'required', 
        ], [
            'rf_historico_clinico.required'     => 'Campo Histórico Clínico na última aba é obrigatório', 
            'rf_historico_familiar.required'    => 'Campo Histórico Familiar na última aba é obrigatório', 
            'rf_historico_piscossocial.required'=> 'Campo Histórico Psicossocial na última aba é obrigatório', 
            'rf_bem_estar.required'             => 'Campo Escala de Bem Estar na última aba é obrigatório', 
            'rf_atividades_diarias.required'    => 'Campo Atividades Diárias na última aba é obrigatório',
        ]);

        $dados = $request->except('_token');
        $dados['aluno_id'] = $alunoID;

        $anamnese = AlunosAnamnese::create($dados);
        return redirect()->route('instrutor.alunos.visualizar', [$alunoID])->with('sucesso', 'Anamnese criada com sucesso');
    }

    //** Abre a tela de Edição de Tarefas */
    public function edicao($anamneseID) {
        $this->formSteps();
        $this->tinyMCE();
        $this->dados['anamnese'] = AlunosAnamnese::findOrFail($anamneseID);
        return view('instrutor.alunos.anamneses.edicao', $this->dados);
    }

    //** Realiza a edição de tarefas */
    public function editar(Request $request, int $id) {
        $anamnese = AlunosAnamnese::findOrFail($id);
        $request->validate([
            'rf_historico_clinico'      => 'required', 
            'rf_historico_familiar'     => 'required', 
            'rf_historico_piscossocial' => 'required', 
            'rf_bem_estar'              => 'required', 
            'rf_atividades_diarias'     => 'required', 
        ], [
            'rf_historico_clinico.required'     => 'Campo Histórico Clínico na última aba é obrigatório', 
            'rf_historico_familiar.required'    => 'Campo Histórico Familiar na última aba é obrigatório', 
            'rf_historico_piscossocial.required'=> 'Campo Histórico Psicossocial na última aba é obrigatório', 
            'rf_bem_estar.required'             => 'Campo Escala de Bem Estar na última aba é obrigatório', 
            'rf_atividades_diarias.required'    => 'Campo Atividades Diárias na última aba é obrigatório',
        ]);

        $anamnese->fill($request->except('_token'));
        $anamnese->save();

        return redirect()->route('instrutor.alunos.visualizar', [$anamnese->aluno_id])->with('sucesso', 'Anamnese editada com sucesso');
    }

    //** Abre a tela de Edição de Tarefas */
    public function excluir($anamneseID) {
        $anamnese = AlunosAnamnese::findOrFail($anamneseID);
        $anamnese->delete();
        return redirect()->route('instrutor.alunos.visualizar', [$anamnese->aluno_id])->with('sucesso', 'Anamnese removida com sucesso');
    }

    //** Realiza o download de um PDF */
    public function download(int $anamneseID) {
        $dados['anamnese'] = AlunosAnamnese::findOrFail($anamneseID);
        //return view('instrutor.alunos.anamneses.pdf' , $dados);
        return \PDF::loadView('instrutor.alunos.anamneses.pdf', $dados)->download("anamnese_$anamneseID.pdf");
    }
}
