<?php

namespace App\Http\Controllers\Instrutor;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoAnamnesesController extends InstrutorController {
    

    // Abre a tela para cadastro de anamnese
    public function nova(Request $request, int $alunoID) {
        $this->formSteps();
        $this->dados['aluno'] = Aluno::findOrFail($alunoID);
        return view('instrutor.alunos.anamneses.nova', $this->dados);
    }

    public function cadastrar(Request $request, int $alunoID) {

    }

    public function edicao() {

    }

    public function editar() {

    }

    public function excluir() {

    }
}
