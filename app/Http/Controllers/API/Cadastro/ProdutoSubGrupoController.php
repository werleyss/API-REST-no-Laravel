<?php

namespace App\Http\Controllers\API\Cadastro;

use App\Http\Controllers\Controller;
use App\Model\ProdutoSubGrupo;
use Illuminate\Http\Request;
use App\Http\Resources\ProdutoSubGrupoResouce;

class ProdutoSubGrupoController extends Controller
{
    private $item;
    private $totalPage = 10;

    public function __construct(ProdutoSubGrupo $item) 
    {
        $this->item = $item;
    }
    public function index()
    {
        return ProdutoSubGrupoResouce::collection($this->item::paginate(10));
    }

    public function store(Request $request)
    {
        $dataForm = $request->all();
        $insert = $this->item->create($dataForm);

        return new ProdutoSubGrupoResouce($insert);
    }

    public function show($id)
    {
        return new ProdutoSubGrupoResouce($this->item::find($id));
    }

    public function update(Request $request, $id)
    {
        $dataForm = $request->all();
        $update = $this->item->find($id);
        $update->update($dataForm);

        return new ProdutoSubGrupoResouce($update);
    }

    public function destroy($id)
    {
        $delete = $this->item->find($id);
        $delete->delete();

        return response()->json(null,204);
    }
}
