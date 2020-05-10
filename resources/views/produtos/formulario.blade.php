@extends('layout.principal')
@section('conteudo')

<h1>Novo Produto</h1>
<form action="{{route('produtos.adiciona')}}" method="POST"><!-- aqui estou utilizando a rota nomeada-->
 <!--  <input  value="{{csrf_token()}}"/>inserindo token na requisição-->
    @csrf <!-- ao que parece,a versao 6 em diante,so aceita o tokem assim -->
    <div class="form-group">
        <label>Nome</label>
        <input class="form-control" name="nome" />
    </div>
    <div class="form-group">
        <label>Descrição</label>
        <input class="form-control" name="descricao"/>
    </div>
    <div class="form-group">
        <label>Valor</label>
        <input class="form-control" name="valor"/>
    </div>
    <div class="form-group">
        <label>Quantidade</label>
        <input class="form-control" type="number" name="quantidade" />
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>
</form>
@stop