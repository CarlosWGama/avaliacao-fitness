@extends('admin.template')

@section('titulo', 'Novo Aluno')

@section('conteudo')


<div class="card">
    <div class="card-header">
        <h5>Cadastro de Aluno</h5>
    </div>

    <form action="{{route('admin.alunos.cadastrar')}}" method="post" enctype="multipart/form-data">
        
        <div class="card-body card-block">
            <!-- FORMULARIO -->
            @include('admin.alunos._shared.form')
            <!-- FORMULARIO -->
        </div>
        
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-save"></i> Cadastrar
            </button>
        </div>
    </form>
</div>
@endsection