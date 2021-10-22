@extends('instrutor.template')

@section('titulo', 'Edição de Usuário')

@section('conteudo')


<div class="card">
    <div class="card-header">
        <h5>Edição</h5>
    </div>

    <form action="{{route('instrutor.instrutores.editar', ['id' => $instrutor->id])}}" method="post" class="form-material">
        
        <div class="card-body card-block">
            <!-- FORMULARIO -->
            @include('instrutor.instrutores._shared.form')
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