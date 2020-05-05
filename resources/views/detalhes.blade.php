@extends('principal')
@section('conteudo')
<h1>Detalhes do Produto  {{$p[0]->nome }}</h1>
<ul>
    <li>
        <b>Valor:</b>R$ {{ $p[0]->valor}}
    </li>
    <li>
        <b>Descrição:</b>{{ $p[0]->descricao }}
    </li>
    <li>
        <b>Quantidade em estoque: </b>{{ $p[0]->quantidade }}
    </li>
</ul>
@stop
