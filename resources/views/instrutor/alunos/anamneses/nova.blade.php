@extends('instrutor.template')

@section('titulo', 'Nova Anamnese de ' . $aluno->nome)

@section('conteudo')


<div class="card">
    <div class="card-header">
        <h5>Cadastro de Anamnese</h5>
    </div>

    <form action="{{route('instrutor.alunos.anamneses.cadastrar', ['alunoID' => $aluno->id])}}" method="post" enctype="multipart/form-data">
        
        <div class="card-body card-block">
            <div class="form-steps">
                <!-- FORMULARIO -->
                @include('instrutor.alunos.anamneses._shared.form')
                <!-- FORMULARIO -->
            </div>
        </div>
        
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-save"></i> Cadastrar
            </button>
        </div>
    </form>
</div>

@endsection