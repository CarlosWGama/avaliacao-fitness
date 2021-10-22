<div class="table-responsive">

    
    <div id="geral-treino">

        <div style="width:180px">
            <h6>Treinos concluídos</h6>
            <div id="progresso-treino"></div>
        </div>

        <div id="treino-informacoes">
            <div class="treino-info-col">
                {{-- TOTAL TREINO --}}
                <p class="campo-treino">Total Treinos:</p>
                <p class="info-treino">4</p>

                {{-- TREINOS CONCLUIOS --}}
                <p class="campo-treino">Treinos Concluídos:</p>
                <p class="info-treino">2</p>
            </div>
    
            <div  class="treino-info-col">
                {{-- ULTIMO TREINO --}}
                <p  class="campo-treino">Último treino:</p>
                <p class="info-treino">08/10/2021</p>
                
                {{-- PRÓXIMO TREINO --}}
                <p  class="campo-treino">Próximo treino:</p>
                <p class="info-treino">08/12/2021</p>  
            </div>
        </div>
    </div>

    @push('css')
        <style>
            #geral-treino {
                display: flex;

            }

            #treino-informacoes {
                flex: 1;
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: flex-start;
            }

            .treino-info-col {
                display: flex;
                flex-direction: column;
                min-width: 300px;
            }

            .campo-treino {
                font-weight: bold;
            }

            .info-treino {
                margin-top: -10px;
            }
        </style>
    @endpush


    <a href="javascript:;" class="btn btn-success">Novo treino</a>

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
            @foreach([(object)['id' => 1, 'data_atual' => '2021-08-08', 'data_proxima' => '2021-10-08'], (object)['id' => 2, 'data_atual' => '2021-10-08', 'data_proxima' => '2021-12-08']] as $treino)
            <tr>
                <!-- ID -->
                <td><h6>{{$treino->id}}</h6></td>
                <!-- DATA -->
                <td><p>{{date('d/m/Y', strtotime($treino->data_atual))}}</p></td>
                <!-- PRÒXIMA -->
                <td><p>{{date('d/m/Y', strtotime($treino->data_proxima))}}</p></td>
              
                <!-- OPÇÕES -->   
                <td>
                    </a>
                    <a href="javascript:;" title="Editar"alt="Editar" class="btn btn-sm btn-success">
                    <i class="fa fa-edit"></i>
                    </a>
                    <span class="btn btn-sm btn-danger remover-modal-treino" title="Excluir" data-toggle="modal" data-target="#modal-treino" data-id="{{$treino->id}}"><i class="fa fa-trash"></i></span>
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
  <div class="modal fade" id="modal-treino" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
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
                   Deseja Realmente excluir esse treino?
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
    let treinoID;
    $('.remover-modal-treino').click(function() {
        treinoID = $(this).data('id');
    })

    // $('.btn-deletar').click(() => window.location.href="{{route('instrutor.alunos.excluir')}}/"+treinoID);
</script>
@endpush

@push('css')
    <style>
        #progresso-treino {
            width: 100px;
            height: 100px;
            margin: 20px;
            position: relative;
        }
    </style>
@endpush

@push('javascript')
    <script src="{{url('admin/js/progressbar.min.js')}}"></script>
    <script>
        const progressAnamnese = document.getElementById('progresso-treino')
        var bar = new ProgressBar.Circle(progressAnamnese, {
        color: '#aaa',
        // This has to be the same size as the maximum width to
        // prevent clipping
        strokeWidth: 4,
        trailWidth: 1,
        easing: 'easeInOut',
        duration: 1400,
        text: {
            autoStyleContainer: false
        },
        from: { color: '#aaa', width: 1 },
        to: { color: '#333', width: 4 },
        // Set default step function for all animate calls
        step: function(state, circle) {
            circle.path.setAttribute('stroke', state.color);
            circle.path.setAttribute('stroke-width', state.width);

            var value = Math.round(circle.value() * 100);
            if (value === 0) {
            circle.setText('');
            } else {
            circle.setText(value);
            }

        }
        });
        bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
        bar.text.style.fontSize = '2rem';

        bar.animate(0.5);  // Number from 0.0 to 1.0
    </script>
       
@endpush