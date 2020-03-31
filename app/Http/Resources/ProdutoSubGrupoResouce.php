<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProdutoSubGrupoResouce extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'                => $this->id,
            'nome'              => $this->nome,
            'produtogrupos_id'  => $this->produtogrupos_id,
            'comissao'          => $this->comissao,
            'foto'              => $this->foto,
        ];
    }
}
