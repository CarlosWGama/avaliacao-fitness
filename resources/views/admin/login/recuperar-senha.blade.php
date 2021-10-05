@extends('admin.login.template')

@section('conteudo_principal')                      
    <form  action="{{route('senha.solicitar')}}" method="post">
        @csrf
        <div class="card-block">
            <div class="row m-b-20">
                <div class="col-md-12">
                    <h3 class="text-center">Recuperar Senha</h3>
                </div>
            </div>

            @if(session('erro'))
                <p><span class="bg-danger" style="padding:5px; border-radius:5px; margin-bottom:5px">{{session('erro')}}</span></p>
            @endif

            <div class="form-group form-primary">
                <input type="text" name="email" class="form-control">
                <span class="form-bar"></span>
                <label class="float-label">Informe seu email</label>
            </div>
    
        
            <div class="row m-t-30">
                <div class="col-md-12">
                    <button class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Logar</button>
                </div>
            </div>

            <div class="row m-t-25 text-left">
                <div class="col-12">
                    <div class="forgot-phone text-left f-left">
                        <a href="{{route('login')}}" class="text-right f-w-600">Voltar tela de login</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection