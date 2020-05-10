@extends('layout.principal')
@section('conteudo')
<h1>Listagem de produtos</h1>
<!-- view alimentada pelo controller produtos -->
@if(empty($produtos))
<div class="alert alert-danger">
    Você não tem produtos cadastrados
</div>
@else
<table class="table">
    @foreach ($produtos as $p)
    <tr class="{{$p->quantidade<=1?'alert-danger':''}}">
        <!--verificando se o estoque é menor ou igual a 1,caso a condição seja verdadeira,aplica a classe danger(condição ternaria) -->
        <td> {{$p->nome}} </td>
        <td>R$ {{ $p->valor}}</td>
        <td> {{$p->descricao}} </td>
        <td> {{$p->quantidade}} </td>
        <td>
            <a href="produtos/detalhes/{{$p->id}}"><span class="glyphicon glyphicon-search"></span>ver</a>
        </td>
        <td>
            <a href="{{action('ProdutoController@remove',$p->id)}}">
                <span class="glyphicon glyphicon-trash">Excluir</span>
            </a>
        </td>
        <td>
            <a href="{{action('ProdutoController@editar',$p->id)}}">
            <span class="glyphicon glyphicon-pencil">Editar</span>
            </a>
        </td>
    </tr>
    @endforeach
</table>
</div>
@endif
<h4>
    <span class="label label-danger pull-right">Um ou menos itens no estoque</span>
</h4>
@if(old('nome'))
<div class="alert alert-sucess">
    <strong>
        O produto {{old('nome')}} foi adicionado com sucesso!
    </strong>
</div>
@endif
@stop