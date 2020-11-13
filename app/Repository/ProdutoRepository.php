<?php

namespace App\Repository;

use App\Jobs\JobProdutoAPI;
use App\Models\Produtos;

class ProdutoRepository
{

    public function countProdutosErp()
    {
        $qtd = Produtos::count();

        return $qtd;
    }

    public function produtosErp()
    {
        $produtos = Produtos::all();

        return $produtos;
    }

    public function enviarProdutos($id, $produtos)
    {
        foreach ($produtos as $produto) {
            JobProdutoAPI::dispatch($id, $produto);
        }
        
        return ;

    }
}
