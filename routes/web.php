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
Route::get('/', 'LoginController@index');
Route::get('/login', 'LoginController@index')->name('login');
Route::post('/logar', 'LoginController@logar')->name('logar');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/recuperar-senha', 'LoginController@recuperarSenha')->name('senha.recuperar');
Route::post('/solicitar-nova-senha', 'LoginController@solicitarNovaSenha')->name('senha.solicitar');
Route::get('/nova-senha', 'LoginController@novaSenha')->name('senha.nova');
Route::post('/nova-senha', 'LoginController@salvarNovaSenha')->name('senha.salvar');

Route::post('/tinymce/upload', 'TinyMCEController@upload')->name('admin.tinymce.upload');


Route::group(['prefix' => 'instrutor', 'middleware' => 'instrutor'], function () {
    

    Route::get('/dashboard', 'Instrutor\DashboardController@index')->name('instrutor.dashboard');

    // Instrutores
    Route::group(['prefix' => 'instrutores'], function () {
        Route::get('/', 'Instrutor\InstrutoresController@index')->name('instrutor.instrutores.listar');
        Route::get('/novo', 'Instrutor\InstrutoresController@novo')->name('instrutor.instrutores.novo');
        Route::post('/cadastrar', 'Instrutor\InstrutoresController@cadastrar')->name('instrutor.instrutores.cadastrar');
        Route::get('/edicao/{id}', 'Instrutor\InstrutoresController@edicao')->name('instrutor.instrutores.edicao');
        Route::post('/editar/{id}', 'Instrutor\InstrutoresController@editar')->name('instrutor.instrutores.editar');
        Route::get('/excluir/{id?}', 'Instrutor\InstrutoresController@excluir')->name('instrutor.instrutores.excluir');
    });


    // Alunos
    Route::group(['prefix' => 'alunos'], function () {
        Route::get('/', 'Instrutor\AlunosController@listar')->name('instrutor.alunos.listar');
        Route::get('/novo', 'Instrutor\AlunosController@novo')->name('instrutor.alunos.novo');
        Route::post('/cadastrar', 'Instrutor\AlunosController@cadastrar')->name('instrutor.alunos.cadastrar');
        Route::get('/edicao/{id}', 'Instrutor\AlunosController@edicao')->name('instrutor.alunos.edicao');
        Route::post('/editar/{id}', 'Instrutor\AlunosController@editar')->name('instrutor.alunos.editar');
        Route::get('/excluir/{id?}', 'Instrutor\AlunosController@excluir')->name('instrutor.alunos.excluir');
        Route::get('/visualizar/{id?}', 'Instrutor\AlunosController@visualizar')->name('instrutor.alunos.visualizar');


        Route::prefix('anamnese')->group(function () {
            Route::get('/nova/{alunoID}', 'Instrutor\AlunoAnamnesesController@nova')->name('instrutor.alunos.anamneses.nova');
            Route::post('/cadastrar/{alunoID}', 'Instrutor\AlunoAnamnesesController@cadastrar')->name('instrutor.alunos.anamneses.cadastrar');
            Route::get('/edicao/{id}', 'Instrutor\AlunoAnamnesesController@edicao')->name('instrutor.alunos.anamneses.edicao');
            Route::post('/editar/{id}', 'Instrutor\AlunoAnamnesesController@editar')->name('instrutor.alunos.anamneses.editar');
            Route::get('/excluir/{id?}', 'Instrutor\AlunoAnamnesesController@excluir')->name('instrutor.alunos.anamneses.excluir');
            Route::get('/download/{id?}', 'Instrutor\AlunoAnamnesesController@download')->name('instrutor.alunos.anamneses.download');
        });
    });
});