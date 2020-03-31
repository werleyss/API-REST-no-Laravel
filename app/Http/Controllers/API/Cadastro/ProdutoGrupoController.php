<?php

namespace App\Http\Controllers\API\Cadastro;

use App\Http\Controllers\Controller;
use App\Model\ProdutoGrupo;
use Illuminate\Http\Request;
use App\Http\Resources\ProdutoGrupoResource;

class ProdutoGrupoController extends Controller
{
    private $produtoGrupo;
    private $totalPage = 10;

    public function __construct(ProdutoGrupo $produtoGrupo) 
    {
        $this->produtoGrupo = $produtoGrupo;
    }

    public function index()
    {
        return ProdutoGrupoResource::collection($this->produtoGrupo::paginate(10));
    }

    public function store(Request $request)
    {
        $dataForm = $request->all();
        $insert = $this->produtoGrupo->create($dataForm);

        return new ProdutoGrupoResource($insert);
    }

    public function show($id)
    {
        return new ProdutoGrupoResource($this->produtoGrupo::find($id));
    }

    public function update(Request $request, $id)
    {
        $dataForm = $request->all();
        $grupo = $this->produtoGrupo->find($id);
        $grupo->update($dataForm);

        return new ProdutoGrupoResource($grupo);
    }

    public function destroy($id)
    {
        $grupo = $this->produtoGrupo->find($id);
        $grupo->delete();

        return response()->json(null,204);
    }
}
