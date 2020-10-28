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
        $seq = 0;
        foreach ($produtos as $produto) {
            $seq = $seq + 1;
            JobProdutoAPI::dispatch($id, $produto, $seq);
        }

        pcntl_exec('c:\WINDOWS\system32\cmd.exe /c START C:\xampp\htdocs\api_erp\start_job.bat &');
        
        return ;

    }
}
