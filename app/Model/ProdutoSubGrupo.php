<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProdutoSubGrupo extends Model
{
    protected $table = 'produtoSubGrupos';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'produtogrupos_id', 'comissao','foto'];
    
    public  $rules = [
            'nome'              => 'required',
            'produtoGrupo_id'   => 'required'
        ];
}
