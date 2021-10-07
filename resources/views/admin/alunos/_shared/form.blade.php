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
    <label class="col-sm-2 col-form-label">Nome completo*</label>
    <div class="col-sm-10">
        <input type="text" id="username" name="nome" value="{{old('nome', $aluno->nome)}}" placeholder="Nome" class="form-control">
    </div>
</div>

<!-- Sexo -->
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Sexo*</label>
    <div class="col-sm-10">
        <select name="sexo" class="form-control">
            <option value="m" @if(old('sexo', $aluno->sexo) == 'm') selected @endif>Masculino</option>
            <option value="f" @if(old('sexo', $aluno->sexo) == 'f') selected @endif>Feminino</option>
        </select>
    </div>
</div>

<!-- DATA DE NASCIMENTO -->
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Data de Nascimento*</label>
    <div class="col-sm-10">
        <input type="date" name="data_nascimento" value="{{old('data_nascimento', $aluno->data_nascimento)}}" placeholder="Data de Nascimento" class="form-control">
    </div>
</div>

<!-- EMAIL -->
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Email*</label>
    <div class="col-sm-10">
        <input type="email" id="email" name="email" value="{{old('email', $aluno->email)}}" placeholder="Email" class="form-control">
    </div>
</div>

<!-- TELEFONE -->
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Telefone*</label>
    <div class="col-sm-10">
        <input type="text" name="telefone" value="{{old('telefone', $aluno->telefone)}}" placeholder="Telefone" class="form-control fone">
    </div>
</div>

<!-- ESTADO -->
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Estado</label>
    <div class="col-sm-10">
        <select name="estado" id="select" class="form-control">
            <option value="AC" @if(old('estado', $aluno->estado) == 'AC') selected @endif>Acre</option>
            <option value="AL" @if(old('estado', $aluno->estado) == 'AL') selected @endif>Alagoas</option>
            <option value="AP" @if(old('estado', $aluno->estado) == 'AP') selected @endif>Amapá</option>
            <option value="AM" @if(old('estado', $aluno->estado) == 'AM') selected @endif>Amazonas</option>
            <option value="BA" @if(old('estado', $aluno->estado) == 'BA') selected @endif>Bahia</option>
            <option value="CE" @if(old('estado', $aluno->estado) == 'CE') selected @endif>Ceará</option>
            <option value="DF" @if(old('estado', $aluno->estado) == 'DF') selected @endif>Distrito Federal</option>
            <option value="ES" @if(old('estado', $aluno->estado) == 'ES') selected @endif>Espírito Santo</option>
            <option value="GO" @if(old('estado', $aluno->estado) == 'GO') selected @endif>Goiás</option>
            <option value="MA" @if(old('estado', $aluno->estado) == 'MA') selected @endif>Maranhão</option>
            <option value="MT" @if(old('estado', $aluno->estado) == 'MT') selected @endif>Mato Grosso</option>
            <option value="MS" @if(old('estado', $aluno->estado) == 'MS') selected @endif>Mato Grosso do Sul</option>
            <option value="MG" @if(old('estado', $aluno->estado) == 'MG') selected @endif>Minas Gerais</option>
            <option value="PA" @if(old('estado', $aluno->estado) == 'PA') selected @endif>Pará</option>
            <option value="PB" @if(old('estado', $aluno->estado) == 'PB') selected @endif>Paraíba</option>
            <option value="PR" @if(old('estado', $aluno->estado) == 'PR') selected @endif>Paraná</option>
            <option value="PE" @if(old('estado', $aluno->estado) == 'PE') selected @endif>Pernambuco</option>
            <option value="PI" @if(old('estado', $aluno->estado) == 'PI') selected @endif>Piauí</option>
            <option value="RJ" @if(old('estado', $aluno->estado) == 'RJ') selected @endif>Rio de Janeiro</option>
            <option value="RN" @if(old('estado', $aluno->estado) == 'RN') selected @endif>Rio Grande do Norte</option>
            <option value="RS" @if(old('estado', $aluno->estado) == 'RS') selected @endif>Rio Grande do Sul</option>
            <option value="RO" @if(old('estado', $aluno->estado) == 'RO') selected @endif>Rondônia</option>
            <option value="RR" @if(old('estado', $aluno->estado) == 'RR') selected @endif>Roraima</option>
            <option value="SC" @if(old('estado', $aluno->estado) == 'SC') selected @endif>Santa Catarina</option>
            <option value="SP" @if(old('estado', $aluno->estado) == 'SP') selected @endif>São Paulo</option>
            <option value="SE" @if(old('estado', $aluno->estado) == 'SE') selected @endif>Sergipe</option>
            <option value="TO" @if(old('estado', $aluno->estado) == 'TO') selected @endif>Tocantins</option>
        </select>
    </div>
</div>

<!-- CIDADE -->
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Cidade</label>
    <div class="col-sm-10">
        <input type="text" name="cidade" value="{{old('cidade', $aluno->cidade)}}" placeholder="Cidade" class="form-control">
    </div>
</div>

<!-- ENDEREÇO -->
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Endereço</label>
    <div class="col-sm-10">
        <input type="text" name="endereco" value="{{old('endereco', $aluno->endereco)}}" placeholder="Endereço" class="form-control">
    </div>
</div>

<!-- OBSERVAÇÃO -->
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Observação</label>
    <div class="col-sm-10">
        <textarea class="tinymce" name="observacao">{{old('observacao', $aluno->observacao)}}</textarea>
    </div>
</div>

<!-- FOTO -->
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Foto</label>
    <div class="col-sm-10">
        <input type="file" name="foto" accept=".gif,.jpg,.jpeg,.png" />
    </div>
</div>

 <!-- FOTO -->
 @if($aluno->foto_url)
 <div class="form-group row">
     <label class="col-sm-2 col-form-label">
        <label class="col-sm-2 col-form-label"></label>
     </label>
     <div class="col-sm-10">
         <img class="avatar-small" src="{{$aluno->foto_url}}" />
     </div>
 </div>
 @endif



@push("javascript")
    <script type="text/javascript" src="{{asset('admin/js/mask/jquery.mask.min.js')}}"></script>

    <script>
        $(document).ready(function(){
            $('.fone').mask('(00) 00000-0000');
        });
    </script>
@endpush