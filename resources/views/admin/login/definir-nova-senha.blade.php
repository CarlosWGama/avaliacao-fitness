@extends('admin.login.template')

@section('conteudo_principal')
                      
    <form  action="{{route('senha.salvar')}}" method="post">
        
        @csrf
        <input type="hidden" value="{{$token}}" name="token" />

        <div class="card-block">
            <div class="row m-b-20">
                <div class="col-md-12">
                    <h3 class="text-center">Recuperar Senha</h3>
                </div>
            </div>


            @if ($errors->any())
            {{-- ERRO --}}
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="form-group form-primary">
                <input type="password" name="senha" class="form-control">
                <span class="form-bar"></span>
                <label class="float-label">Nova senha</label>
            </div>
    
            <div class="row m-t-30">
                <div class="col-md-12">
                    <button class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Definir nova senha</button>
                </div>
            </div>
        </div>
    </form>
@endsection