@extends('admin.login.template')

@section('conteudo_principal')
                      
    <form  action="{{route('logar')}}" method="post">
        @csrf
        <div class="card-block">
            <div class="row m-b-20">
                <div class="col-md-12">
                    <h3 class="text-center">Administrativo</h3>
                </div>
            </div>


            @if(session('erro')) 
                <p><span class="bg-danger" style="padding:5px; border-radius:5px; margin-bottom:5px">{{session('erro')}}</span></p>
            @endif


            <div class="form-group form-primary">
                <input type="text" name="email" class="form-control">
                <span class="form-bar"></span>
                <label class="float-label">Digite seu email</label>
            </div>
            <div class="form-group form-primary">
                <input type="password" name="senha" class="form-control">
                <span class="form-bar"></span>
                <label class="float-label">Digite sua senha</label>
            </div>
            <div class="row m-t-25 text-left">
                <div class="col-12">
                    <div class="forgot-phone text-right f-right">
                        <a href="{{route('senha.recuperar')}}" class="text-right f-w-600">Esqueceu sua senha?</a>
                    </div>
                </div>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <button class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Logar</button>
                </div>
            </div>
        </div>
    </form>
@endsection