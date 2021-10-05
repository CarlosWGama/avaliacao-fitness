<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Usuario;

/**
 * Tela Inicial do Admin
 */
class DashboardController extends AdminController {

    public function __construct() {
        $this->dados['menu'] = 'dashboard';
    }

    /** Tela Inicial do Dashboard */
    public function index() {
        $this->dados['usuarios'] = Usuario::count();
        $this->dados['alunos'] = 0;
        $this->dados['treinos'] = 0;
        $this->dados['anamneses'] = 0;
        return view('admin.dashboard.index', $this->dados);
    }
}
