@extends('layout.principal')
@section('conteudo')

<h1>Novo Produto</h1>
<form action="{{route('produtos.adiciona')}}"><!-- aqui estou utilizando a rota nomeada-->
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