<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //importando a classe db,que auxilia nos comandos do sql

class ProdutoController extends Controller
{
    //controller criado com o artisan
    public function lista()
    {
        $produtos = DB::select('select * from produtos');

        // return  view('listagem')->with('produtos',$produtos);//enviando a variavel produtos para a view
        return view('produtos.listagem')->withProdutos($produtos); //utilizando metodo "magico" para passar as informaçãoes 
       // return "chegou no controller";
    }
    public function mostra($id)
    {
       // var_dump($id);
        //$id = $id->all();
        //var_dump($id);
        // $id = Request::input('id');//pegando o id do elemento enviado no request,na versão 5 é desta forma
        // var_dump($id->id)peguei o id que veio da variavel request
        //die;
        $resposta = DB::select('select * from produtos where id=?', [$id]);
        // var_dump($resposta);
        // die;
        if (empty($resposta)) {
            return "produto não encontrado";
        } else {
            return view('produtos.detalhes')->withP($resposta);
        }
    }
}
