<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProdutoGrupoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'        => $this->id,
            'nome'      => $this->nome,
            'comissao'  => $this->comissao,
            'foto'      => $this->foto,
        ];
    }
}
