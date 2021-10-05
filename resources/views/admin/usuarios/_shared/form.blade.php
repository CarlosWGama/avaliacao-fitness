@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@csrf

<!-- NOME -->
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Nome</label>
    <div class="col-sm-10">
        <input type="text" id="username" name="nome" value="{{old('nome', $usuario->nome)}}" placeholder="Nome" class="form-control">
    </div>
</div>

<!-- EMAIL -->
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
        <input type="email" id="email" name="email" value="{{old('email', $usuario->email)}}" placeholder="Email" class="form-control">
    </div>
</div>

<!-- SENHA -->
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Senha</label>
    <div class="col-sm-10">
        <input type="password" id="password" name="senha" placeholder="Senha" class="form-control">
    </div>
</div>

<!-- ADMINISTRADOR -->
{{-- <div class="form-group row">
    <label class="col-sm-2 col-form-label">Nível de acesso</label>
    <div class="col-sm-10">
        <select name="admin" id="select" class="form-control">
            <option value="0" @if(old('admin', $usuario->admin) == '1') selected @endif>Administrador</option>
            <option value="1" @if(old('admin', $usuario->admin) == '1') selected @endif>Comum</option>
        </select>
    </div>
</div> --}}

@push("javascript")
    <script type="text/javascript" src="{{asset('admin/js/mask/jquery.mask.min.js')}}"></script>

    <script>
        $(document).ready(function(){
            $('.fone').mask('(00) 00000-0000');
            $('.cpf').mask('000.000.000-00');
        });
    </script>
@endpush