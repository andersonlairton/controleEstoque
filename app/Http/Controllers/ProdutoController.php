<?php

namespace estoque\Http\Controllers;

use estoque\Http\Requests\ProdutosRequest;
use estoque\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //importando a classe db,que auxilia nos comandos do sql

class ProdutoController extends Controller
{
    //controller criado com o artisan
    public function lista()
    {
        //$produtos = DB::select('select * from produtos');
        //usando o metodo eloquement
        $produtos = Produto::all();
        // return  view('listagem')->with('produtos',$produtos);//enviando a variavel produtos para a view
        return view('produtos.listagem')->withProdutos($produtos); //utilizando metodo "magico" para passar as informaçãoes 
        // return "chegou no controller";
    }
    public function mostra($id)
    {
        //$id = $id->all();   
        // $id = Request::input('id');//pegando o id do elemento enviado no request,na versão 5 é desta forma
        //  $resposta = DB::select('select * from produtos where id=?', [$id]);
        //fazendo a busca com o eloquent
        $resposta = Produto::find($id); //pode ser buscado assim
        //$resposta = Produto::where('id',$id)->first();//pode ser buscado desta forma tambem

        if (empty($resposta)) {
            return "produto não encontrado";
        } else {
            return view('produtos.detalhes')->withP($resposta);
        }
    }
    public function novo()
    {
        return view('produtos.formulario');
    }
    public function adiciona(ProdutosRequest $p)//chamando a classe produtos request para fazer a validação
    {
        //adicionando via eloquent
        /*$prod = new Produto();//basicamente,estou chamando a classe(ou model no mvc) para fazer o insert
        $prod->nome = $p->input('nome');//setando as variaveis
        $prod->valor = $p->input('valor');
        $prod->quantidade = $p->input('quantidade');
        $prod->descricao = $p->input('descricao');
        $prod->save();//salvando
        */
        /**ainda mais enxuto */
        /**existe um metodo chamado validate que valida um campo especifico,caso seja necessario */
        Produto::create($p->all()); //com isso ele ja faz o metodo save 

        //pegando dados do formulario
        /*$nome =$p->input('nome');
        $descricao = $p->input('descricao');
        $valor=$p->input('valor');
        $quantidade=$p->input('quantidade');
        */

        //inserindo no banco de dados
        /*DB::insert('insert into produtos
        (nome,quantidade,valor,descricao) values(?,?,?,?)',
        [$nome,$quantidade,$valor,$descricao]);
        */
        //retornando
        //return redirect('/produtos')->withInput($p->only('nome'));//redireciona para a pagina de listagem,e recuperando apenas o input "nome"
        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome')); //redirecionano com ação
    }
    public function remove($id)
    {
        $prod = Produto::find($id);
        $prod->delete();
        return redirect()->action('ProdutoController@lista');
    }
    public function editar($id)
    {

        $resposta = Produto::find($id);

        if (empty($resposta)) {
            return "produto não encontrado";
        } else {
            return view('produtos.formulario')->withP($resposta);
        }
    }
    public function update(ProdutosRequest $id)
    {
        $prod = Produto::find($id->id);
        if (empty($prod)) {
            return "produto não encontrado";
        } else {
            $prod->update($id->all());
            return redirect()->action('ProdutoController@lista');
        }
    }
}
