<?php

namespace App\Http\Controllers\Instrutor;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Models\Instrutor;

/**
 * Tela Inicial do Instrutor
 */
class DashboardController extends InstrutorController {

    public function __construct() {
        $this->dados['menu'] = 'dashboard';
    }

    /** Tela Inicial do Dashboard */
    public function index() {
        $this->dados['instrutores'] = Instrutor::count();
        $this->dados['alunos'] = Aluno::count();
        $this->dados['treinos'] = 0;
        $this->dados['anamneses'] = 0;
        return view('instrutor.dashboard.index', $this->dados);
    }
}
