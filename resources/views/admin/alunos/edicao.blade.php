@extends('admin.template')

@section('titulo', 'Edição de Usuário')

@section('conteudo')


<div class="card">
    <div class="card-header">
        <h5>Edição</h5>
    </div>

    <form action="{{route('admin.alunos.editar', ['id' => $aluno->id])}}" method="post" class="form-material" enctype="multipart/form-data">
        
        <div class="card-body card-block">
            <!-- FORMULARIO -->
            @include('admin.alunos._shared.form')
            <!-- FORMULARIO -->
        </div>
        
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-save"></i> Editar
            </button>
        </div>
    </form>
</div>
@endsection