@extends('admin.template')

@section('titulo', 'Edição de Usuário')

@section('conteudo')


<div class="card">
    <div class="card-header">
        <h5>Edição</h5>
    </div>

    <form action="{{route('admin.usuarios.editar', ['id' => $usuario->id])}}" method="post" class="form-material">
        
        <div class="card-body card-block">
            <!-- FORMULARIO -->
            @include('admin.usuarios._shared.form')
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