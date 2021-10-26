@extends('instrutor.template')

@section('titulo', 'Edição de Anamnese de ' . $anamnese->aluno->nome)

@section('conteudo')


<div class="card">
    <div class="card-header">
        <h5>Cadastro de Anamnese</h5>
    </div>

    <form action="{{route('instrutor.alunos.anamneses.editar', ['id' => $anamnese->id])}}" method="post" enctype="multipart/form-data">
        @csrf

        
        <div class="card-body card-block">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-steps">
                <!-- FORMULARIO -->
                @include('instrutor.alunos.anamneses._shared.form')
                <!-- FORMULARIO -->
            </div>
        </div>
        
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-save"></i> Editar
            </button>
        </div>
    </form>
</div>

@endsection