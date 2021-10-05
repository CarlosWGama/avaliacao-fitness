<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//============================ ADMIN ======================================//
Route::get('/', 'Admin\LoginController@index');
Route::get('/login', 'Admin\LoginController@index')->name('login');
Route::post('/logar', 'Admin\LoginController@logar')->name('logar');
Route::get('/logout', 'Admin\LoginController@logout')->name('logout');
Route::get('/recuperar-senha', 'Admin\LoginController@recuperarSenha')->name('senha.recuperar');
Route::post('/solicitar-nova-senha', 'Admin\LoginController@solicitarNovaSenha')->name('senha.solicitar');
Route::get('/nova-senha', 'Admin\LoginController@novaSenha')->name('senha.nova');
Route::post('/nova-senha', 'Admin\LoginController@salvarNovaSenha')->name('senha.salvar');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {

    Route::post('/tinymce/upload', 'Admin\TinyMCEController@upload')->name('admin.tinymce.upload');

    Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');

    // USUARIOS
    Route::group(['prefix' => 'usuarios'], function () {
        Route::get('/', 'Admin\UsuariosController@index')->name('admin.usuarios.listar');
        Route::get('/novo', 'Admin\UsuariosController@novo')->name('admin.usuarios.novo');
        Route::post('/cadastrar', 'Admin\UsuariosController@cadastrar')->name('admin.usuarios.cadastrar');
        Route::get('/edicao/{id}', 'Admin\UsuariosController@edicao')->name('admin.usuarios.edicao');
        Route::post('/editar/{id}', 'Admin\UsuariosController@editar')->name('admin.usuarios.editar');
        Route::get('/excluir/{id?}', 'Admin\UsuariosController@excluir')->name('admin.usuarios.excluir');
    });


    //Vídeos
    Route::prefix('videos')->group(function () {
        Route::get('/', 'Admin\GaleriaVideosController@index')->name('admin.videos.listar');
        Route::get('/novo', 'Admin\GaleriaVideosController@novo')->name('admin.videos.novo');
        Route::post('/cadastrar', 'Admin\GaleriaVideosController@cadastrar')->name('admin.videos.cadastrar');
        Route::get('/edicao/{id}', 'Admin\GaleriaVideosController@edicao')->name('admin.videos.edicao');
        Route::post('/editar/{id}', 'Admin\GaleriaVideosController@editar')->name('admin.videos.editar');
        Route::get('/excluir/{id?}', 'Admin\GaleriaVideosController@excluir')->name('admin.videos.excluir');
        Route::get('/remove-capa/{id}', 'Admin\GaleriaVideosController@removerCapa')->name('admin.videos.remover-capa');

    });

    //Imagens
    Route::prefix('imagens')->group(function () {
        Route::get('/', 'Admin\GaleriaImagensController@index')->name('admin.imagens.listar');
        Route::get('/nova', 'Admin\GaleriaImagensController@nova')->name('admin.imagens.nova');
        Route::post('/cadastrar', 'Admin\GaleriaImagensController@cadastrar')->name('admin.imagens.cadastrar');
        Route::get('/edicao/{id}', 'Admin\GaleriaImagensController@edicao')->name('admin.imagens.edicao');
        Route::post('/editar/{id}', 'Admin\GaleriaImagensController@editar')->name('admin.imagens.editar');
        Route::get('/excluir/{id?}', 'Admin\GaleriaImagensController@excluir')->name('admin.imagens.excluir');
        Route::post('/adicionar-imagem/{galeriaID}', 'Admin\GaleriaImagensController@adicionarImagem')->name('admin.imagens.adicionar-imagem');
        Route::get('/remover-imagem/{galeriaID}/{id?}', 'Admin\GaleriaImagensController@removerImagem')->name('admin.imagens.remover-imagem');
        Route::get('/selecionar-capa/{galeriaID}/{imagemID?}', 'Admin\GaleriaImagensController@selecionarCapa')->name('admin.imagens.selecionar-capa');
    });
});