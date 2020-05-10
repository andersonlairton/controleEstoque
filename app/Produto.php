<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //associando a tabela produtos
    protected $table = 'produtos';
    public $timestamps=false;
    protected $fillable = ['nome','descricao','valor','quantidade'];
}
