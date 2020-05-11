@extends('layout.principal')
@section('conteudo')

<h1>@if(empty($p))
    Novo Produto
    @else
    Editar {{$p->nome}}
    @endif
</h1>
@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            <!-- chamando a variavel que ira apresentar na tela os erros -->
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{empty($p)?route('produtos.adiciona'):action('ProdutoController@update',$p->id)}}" method="POST">
    <!-- aqui estou utilizando a rota nomeada-->
    <!--  <input  value="{{csrf_token()}}"/>inserindo token na requisição-->
    @csrf
    <!-- ao que parece,a versao 6 em diante,so aceita o tokem assim -->
    <div class="form-group">
        <label>Nome</label>
        <input class="form-control" name="nome" value="{{!empty($p->nome)?$p->nome:old('nome')}}" />

    </div>
    <div class="form-group">
        <label>Descrição</label>
        <input class="form-control" name="descricao" value="{{!empty($p->descricao)?$p->descricao:old('descricao')}}" />
    </div>
    <div class="form-group">
        <label>Valor</label>
        <input class="form-control" name="valor" value="{{!empty($p->valor)?$p->valor:old('valor')}}" />
    </div>
    <div class="form-group">
        <label>Quantidade</label>
        <input class="form-control" type="number" name="quantidade" value="{{!empty($p->quantidade)?$p->quantidade:old('quantidade')}}" />
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>
</form>
@stop