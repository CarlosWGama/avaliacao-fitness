@extends('admin.template')

@section('titulo', 'Perfil de ' . $aluno->nome)


@push('css')
    <style>
        #ficha-aluno {
            display: flex;
            padding: 20px;
        }

        #avatar-campo {
            flex: 1;
            display: flex;
            align-items: center;
            width: 30%;
            max-width: 200px;
        }

        #avatar {
            width: 100%;
            border-radius: 15px;
        }

        #ficha {
            width: 70%;
            padding: 20px;
        }

        .campo {
            font-weight: bolder;
            font-size: 14px;
        }

        .valor {

        }

        .nav-link  {
            margin-bottom: 0px;
        }
    </style>
@endpush

@section('conteudo')

<div class="card">
    <div class="card-header" onclick="ocultarCampo('#ficha-aluno')">
        <h5>Perfil de {{$aluno->nome}}</h5>
    </div>


    <div id="ficha-aluno">
        <div id="avatar-campo">
            <img src="{{$aluno->foto_url}}" id="avatar" />
        </div>
        <div id="ficha">
            <!--- NOME -->
            <div class="row">
                <div class="col-3"><p class="campo">Nome Completo:</p></div>
                <div class="col-9"><p class="valor">{{$aluno->nome}}</p></div>
            </div>
            <!-- SEXO -->
            <div class="row">
                <div class="col-3"><p class="campo">Sexo:</p></div>
                <div class="col-9"><p class="valor">{{($aluno->sexo == 'm' ? 'Masculino' : 'Feminino')}}</p></div>
            </div>
            <!-- DATA NASCIMENTO -->
            <div class="row">
                <div class="col-3"><p class="campo">Data Nascimento:</p></div>
                <div class="col-9"><p class="valor">{{date('d/m/Y', strtotime($aluno->data_nascimento))}}</p></div>
            </div>
            @if(!empty($aluno->telefone))
            <!-- CIDADE -->
            <div class="row">
                <div class="col-3"><p class="campo">Telefone:</p></div>
                <div class="col-9"><p class="valor">{{$aluno->telefone}}</p></div>
            </div>
            @endif
            @if(!empty($aluno->cidade))
            <!-- CIDADE -->
            <div class="row">
                <div class="col-3"><p class="campo">Cidade:</p></div>
                <div class="col-9"><p class="valor">{{$aluno->cidade}} ({{$aluno->estado}})</p></div>
            </div>
            @endif
            @if(!empty($aluno->endereco))
            <!-- ENDEREÇO -->
            <div class="row">
                <div class="col-3"><p class="campo">Endereço:</p></div>
                <div class="col-9"><p class="valor">{{$aluno->endereco}}</p></div>
            </div>
            @endif
            @if(!empty($aluno->observacao))
            <!-- ENDEREÇO -->
            <div class="row">
                <div class="col-3"><p class="campo">Observação:</p></div>
                <div class="col-9"><p class="valor">{!!$aluno->observacao!!}</p></div>
            </div>
            @endif
        </div>
    </div>
    
</div>


<div class="card">
    <div class="card-header" onclick="ocultarCampo('#ficha-tecnica')">
        <h5>Ficha Técnica</h5>
    </div>

    <div id="ficha-tecnica">
        
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <p class="nav-link active tab-ft" id="ft-anmense" data-ficha="anamese"  aria-current="page" href="#">Anamnese</p>
            </li>
            <li class="nav-item">
                <p class="nav-link tab-ft" id="ft-treino" data-ficha="treino" href="#">Treinos</p>
            </li>
            <li class="nav-item">
                <p class="nav-link" href="">...</p>
            </li>
        </ul>
        
        <div style="padding:20px">
            <div id="anamese" class="ficha">@include('admin.alunos._anamnese')</div>
            <div id="treino"  class="ficha" style="display:none;">@include('admin.alunos._treinos')</div>
        </div>
    </div>
</div>


  @push('javascript')
    <script>
        // OCULTA UM CARD
        function ocultarCampo(id) {
            $(id).toggle('slow');
        }

        //Abas
        $('.tab-ft').click(function() {
            const ficha = $(this).data('ficha')
            $('.tab-ft').removeClass('active');
            $(this).addClass('active');
            $('.ficha').hide();
            $(`#${ficha}`).show();
        });
    </script>
@endpush
@endsection