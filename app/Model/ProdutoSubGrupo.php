<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProdutoSubGrupo extends Model
{
    protected $table = 'produtoSubGrupos';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'produtoGrupos_id', 'comissao','foto'];
    
    public  $rules = [
            'nome'              => 'required',
            'produtoGrupos_id'   => 'required'
        ];
}
