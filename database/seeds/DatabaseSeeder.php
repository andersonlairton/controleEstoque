<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ProdutoTableSeeder::class);
    }
}

class ProdutoTableSeeder extends Seeder{//função que automatiza a inserção de dados
    public function run(){

        //fazendo o insert
        DB::insert('insert into produtos
        (nome,quantidade,valor,descricao)
        values(?,?,?,?)',
        ['Geladeira',2, 0,'Side by Side com gelo e dispacer na porta']);

        DB::insert('insert into produtos
        (nome,quantidade,valor,descricao)
        values(?,?,?,?)',
        ['Fogão',5,950.99,'painel automatico e forno eletrico']);

        DB::insert('insert into produtos
        (nome,quantidade,valor,descricao)
        values(?,?,?,?)',
        ['Microondas',1,1520.99,'Avisa no sms quando a pipoca esta pronta']);
    }
}
