<div class="table-responsive">

    <a href="javascript:;" class="btn btn-success">Nova Anmese</a>

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
            @foreach([] as $aluno)
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
                    <a href="{{route('admin.alunos.visualizar', ['id' => $aluno->id])}}" title="Visualizar" alt="Visualizar" class="btn btn-sm btn-primary">
                    <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{route('admin.alunos.edicao', ['id' => $aluno->id])}}" title="Editar"alt="Editar" class="btn btn-sm btn-success">
                    <i class="fa fa-edit"></i>
                    </a>
                    <span class="btn btn-sm btn-danger remover-modal" title="Excluir" data-toggle="modal" data-target="#smallmodal" data-id="{{$aluno->id}}"><i class="fa fa-trash"></i></span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <!-- Paginação -->
    {{-- <div style="padding:10px">{{$alunos->links()}}</div> --}}

</div>