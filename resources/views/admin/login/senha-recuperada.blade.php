@extends('admin.login.template')

@section('conteudo_principal')
   
    <div class="card-block">
        <div class="row m-b-20">
            <div class="col-md-12">
                <h3 class="text-center">Recuperar Senha</h3>
            </div>
        </div>

        <p>Sua senha foi recuperada. Clique no link abaixo para realizar novamente o login</p>

        <div class="forgot-phone text-right f-right">
            <a href="{{route('login')}}" class="text-right f-w-600">Voltar para tela de Login</a>
        </div>
    </div>
@endsection