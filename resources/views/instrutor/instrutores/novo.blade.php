@extends('instrutor.template')

@section('titulo', 'Novo Usuário')

@section('conteudo')


<div class="card">
    <div class="card-header">
        <h5>Cadastro de Usuário</h5>
    </div>

    <form action="{{route('instrutor.instrutores.cadastrar')}}" method="post">
        
        <div class="card-body card-block">
            <!-- FORMULARIO -->
            @include('instrutor.instrutores._shared.form')
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