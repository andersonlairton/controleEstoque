<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;//importando a classe db,que auxilia nos comandos do sql

class ProdutoController extends Controller
{
    //controller criado com o artisan
    public function lista(){
        
        $html= '<h1>Listagem de produtos com laravel</h1>';
        $html.='<ul>';

        $produtos = DB::select('select * from produtos');

        foreach($produtos as $p){
            $html.='<li> Nome:'.$p->nome.',
            Descricao:'.$p->descricao.'</li>';
        }
        $html.='</ul>';

        return $html; 
    }
}
