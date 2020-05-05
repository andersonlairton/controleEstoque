<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;//importando a classe db,que auxilia nos comandos do sql

class ProdutoController extends Controller
{
    //controller criado com o artisan
    public function lista(){
        $produtos = DB::select('select * from produtos');
       
       // return  view('listagem')->with('produtos',$produtos);//enviando a variavel produtos para a view
        return view('listagem')->withProdutos($produtos);//utilizando metodo "magico" para passar as informaçãoes 
    }
}
