@extends('layout.principal')
@section('conteudo')

<h1>@if(empty($p))
    Novo Produto
    @else
    Editar {{$p->nome}}
    @endif
    </h1>
<form action="{{empty($p)?route('produtos.adiciona'):action('ProdutoController@update',$p->id)}}" method="POST"><!-- aqui estou utilizando a rota nomeada-->
 <!--  <input  value="{{csrf_token()}}"/>inserindo token na requisição-->
    @csrf <!-- ao que parece,a versao 6 em diante,so aceita o tokem assim -->
    <div class="form-group">
        <label>Nome</label>
        <input class="form-control" name="nome" value="{{!empty($p->nome)?$p->nome:''}}"/>
       
    </div>
    <div class="form-group">
        <label>Descrição</label>
        <input class="form-control" name="descricao" value="{{!empty($p->descricao)?$p->descricao:''}}"/>
    </div>
    <div class="form-group">
        <label>Valor</label>
        <input class="form-control" name="valor" value="{{!empty($p->valor)?$p->valor:''}}"/>
    </div>
    <div class="form-group">
        <label>Quantidade</label>
        <input class="form-control" type="number" name="quantidade" value="{{!empty($p->quantidade)?$p->quantidade:''}}"/>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>
</form>
@stop