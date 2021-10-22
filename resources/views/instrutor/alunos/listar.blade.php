@extends('instrutor.template')

@section('titulo', 'Lista de alunos')


@push('css')
    <style>
        .form-busca {
            padding: 20px;
            flex-direction: row;
            display: flex;  
            height: 75px;
        }
        .input-group {
            max-width: 400px;
        }
    </style>
@endpush

@section('conteudo')

<div class="card">
    <div class="card-header">
        <h5>Alunos Cadastrados</h5>
    </div>


    <form action="{{route('instrutor.alunos.listar')}}">
        <div class="form-busca">
            <!-- BUSCAR -->
            <div class="input-group">
                <input type="text" name="buscar" value="{{$buscar}}" placeholder="Digite um valor para buscar" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>

    <div class="card-block table-border-style">
        <div class="table-responsive">
                @if(session('sucesso'))
                <div class="alert alert-success" role="alert" style="margin:0px 10px">
                    {{session('sucesso')}}
                </div>
                @endif
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Foto</td>
                        <td style="width:60%">Nome</td>
                        <td>Opções</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alunos as $aluno)
                    <tr>
                        <!-- ID -->
                        <td><h6>{{$aluno->id}}</h6></td>
                        <!-- FOTO -->
                        <td><img src="{{$aluno->foto_url}}"  class="avatar-tiny"/></td>
                        <!-- NOME -->
                        <td>
                            <div class="table-data__info">
                                <h6>{{$aluno->nome}}</h6>
                                <span>
                                    <a href="#">{{$aluno->email}} ({{$aluno->telefone}})</a>
                                </span>
                            </div>
                        </td>
                        <!-- OPÇÕES -->   
                        <td>
                            <a href="{{route('instrutor.alunos.visualizar', ['id' => $aluno->id])}}" title="Visualizar" alt="Visualizar" class="btn btn-sm btn-primary">
                               <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{route('instrutor.alunos.edicao', ['id' => $aluno->id])}}" title="Editar"alt="Editar" class="btn btn-sm btn-success">
                               <i class="fa fa-edit"></i>
                            </a>
                            <span class="btn btn-sm btn-danger remover-modal" title="Excluir" data-toggle="modal" data-target="#smallmodal" data-id="{{$aluno->id}}"><i class="fa fa-trash"></i></span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            <!-- Paginação -->
            <div style="padding:10px">{{$alunos->links()}}</div>
    
        </div>
    </div>
    
</div>


    @push('javascript')
  <!-- modal small -->
  <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="smallmodalLabel">Remover aluno</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                       Deseja Realmente excluir esse aluno?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary btn-deletar">Confirmar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal small -->

    <script>
        let conteudoID;
        $('.remover-modal').click(function() {
            conteudoID = $(this).data('id');
        })

        $('.btn-deletar').click(() => window.location.href="{{route('instrutor.alunos.excluir')}}/"+conteudoID);
    </script>
@endpush
@endsection