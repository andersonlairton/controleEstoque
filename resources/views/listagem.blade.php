@extends('principal')
@section('conteudo')
<h1>Listagem de produtos</h1>
<!-- view alimentada pelo controller produtos -->
<table class="table">
    @foreach ($produtos as $p) 
        <tr>
            <td> {{$p->nome}} </td>
            <td>R$ {{ $p->valor}}</td>
            <td> {{$p->descricao}} </td>
            <td> {{$p->quantidade}} </td>
            <td>
                <a href="produtos/detalhes/{{$p->id}}"><span class="glyphicon glyphicon-search"></span>ver</a>
            </td>
        </tr>
    @endforeach
</table>
</div>
@stop