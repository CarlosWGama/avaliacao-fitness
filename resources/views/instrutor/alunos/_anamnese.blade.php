<div class="table-responsive">


    <div id="geral-anamnese">
        <div class="geral-anamnese-col">
            <p class="campo-anamnese">Total Anamneses realizadas:</p>
            <p class="info-anamnese">2</p>
        </div>

        <div class="geral-anamnese-col">
            {{-- ULTIMA --}}
            <p  class="campo-anamnese">Última Anamnese:</p>
            <p class="info-anamnese">08/10/2021</p>

            {{-- PRÓXIMA --}}
            <p  class="campo-anamnese">Próxima Anamnese:</p>
            <p class="info-anamnese">08/12/2021</p>
        </div>
    </div>

    @push('css')
        <style>
            #geral-anamnese {
                display: flex; 
            }

            .geral-anamnese-col {
                width: 280px;
            }

            .campo-anamnese {
                font-weight: bold;
            }

            .info-anamnese {
                margin-top: -15px;
                margin-left: 10px;
            }
        </style>
    @endpush

    <a href="javascript:;" class="btn btn-success">Nova Anamnese</a>

    @if(session('sucesso'))
    <div class="alert alert-success" role="alert" style="margin:0px 10px">
        {{session('sucesso')}}
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Data Atual</td>
                <td style="width:60%">Data da Próxima</td>
                <td>Opções</td>
            </tr>
        </thead>
        <tbody>
            @foreach([(object)['id' => 1, 'data_atual' => '2021-08-08', 'data_proxima' => '2021-10-08'], (object)['id' => 2, 'data_atual' => '2021-10-08', 'data_proxima' => '2021-12-08']] as $anamnese)
            <tr>
                <!-- ID -->
                <td><h6>{{$anamnese->id}}</h6></td>
                <!-- DATA -->
                <td><p>{{date('d/m/Y', strtotime($anamnese->data_atual))}}</p></td>
                <!-- PRÒXIMA -->
                <td><p>{{date('d/m/Y', strtotime($anamnese->data_proxima))}}</p></td>
              
                <!-- OPÇÕES -->   
                <td>
                    </a>
                    <a href="javascript:;" title="Editar"alt="Editar" class="btn btn-sm btn-success">
                    <i class="fa fa-edit"></i>
                    </a>
                    <span class="btn btn-sm btn-danger remover-modal-anamnese" title="Excluir" data-toggle="modal" data-target="#modal-anamnese" data-id="{{$anamnese->id}}"><i class="fa fa-trash"></i></span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <!-- Paginação -->
    {{-- <div style="padding:10px">{{$alunos->links()}}</div> --}}
</div>


@push('javascript')

  <!-- modal small -->
  <div class="modal fade" id="modal-anamnese" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
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
                   Deseja Realmente excluir essa anamnese?
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
    let anamneseID;
    $('.remover-modal-anamnese').click(function() {
        anamneseID = $(this).data('id');
    })

    // $('.btn-deletar').click(() => window.location.href="{{route('instrutor.alunos.excluir')}}/"+anamneseID);
</script>
@endpush