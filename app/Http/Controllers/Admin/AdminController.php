<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Foto;
use Illuminate\Http\Request;
use App\Models\Usuario;
/**
 * Tela Inicial do Admin
 */
class AdminController extends Controller {
    protected $dados = [
        'menu'      => '',
        'tinyMCE'   => false
    ];

    protected function tinyMCE() {
        $this->dados['tinyMCE'] = true;
    }
}
