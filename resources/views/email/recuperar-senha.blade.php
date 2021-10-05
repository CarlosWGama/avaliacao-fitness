<h1>Recupera Senha</h1>

<p>Olá {{$usuario->nome}}, caso você tenha solicitado a recuperação de senha do portal, clique no clique no link abaixo:</p>

<a href="{{route('senha.nova', ['token' => $token])}}">{{route('senha.nova', ['token' => $token])}}</a>
