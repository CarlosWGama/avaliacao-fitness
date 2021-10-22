<?php

namespace App\Http\Controllers\Instrutor;

use App\Http\Controllers\Controller;
use App\Models\Foto;
use Illuminate\Http\Request;
use App\Models\Instrutor;
/**
 * Tela Inicial do Instrutor
 */
class InstrutorController extends Controller {
    protected $dados = [
        'menu'      => '',
        'tinyMCE'   => false,
        'formSteps'   => false,
    ];

    protected function tinyMCE() {
        $this->dados['tinyMCE'] = true;
    }

    protected function formSteps() {
        $this->dados['formSteps'] = true;
    }
}
