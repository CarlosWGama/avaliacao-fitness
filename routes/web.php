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


    // USUARIOS
    Route::group(['prefix' => 'alunos'], function () {
        Route::get('/', 'Admin\AlunosController@listar')->name('admin.alunos.listar');
        Route::get('/novo', 'Admin\AlunosController@novo')->name('admin.alunos.novo');
        Route::post('/cadastrar', 'Admin\AlunosController@cadastrar')->name('admin.alunos.cadastrar');
        Route::get('/edicao/{id}', 'Admin\AlunosController@edicao')->name('admin.alunos.edicao');
        Route::post('/editar/{id}', 'Admin\AlunosController@editar')->name('admin.alunos.editar');
        Route::get('/excluir/{id?}', 'Admin\AlunosController@excluir')->name('admin.alunos.excluir');
        Route::get('/visualizar/{id?}', 'Admin\AlunosController@visualizar')->name('admin.alunos.visualizar');
    });
});