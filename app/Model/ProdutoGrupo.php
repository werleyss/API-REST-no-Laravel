<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProdutoGrupo extends Model
{
    protected $table = 'produtoGrupos';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'comissao','foto'];
    
    public  $rules = [
            'nome'       => 'required',
        ];

}
