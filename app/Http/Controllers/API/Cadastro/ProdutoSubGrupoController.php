<?php

namespace App\Http\Controllers\API\Cadastro;

use App\Http\Controllers\Controller;
use App\Model\ProdutoSubGrupo;
use Illuminate\Http\Request;

class ProdutoSubGrupoController extends Controller
{
    private $produtoSubGrupo;
    private $totalPage = 10;

    public function __construct(ProdutoSubGrupo $produtoSubGrupo) 
    {
        $this->produtoSubGrupo = $produtoSubGrupo;
    }
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        //
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy()
    {
        //
    }
}
