<?php

namespace App\Repository;

use App\Models\Precos;

class PrecoRepository
{

        public function salvarPrecos($id, $produtos)
    {
        foreach ($produtos as $produto) {
            $seq = $seq + 1;
            JobProdutoAPI::dispatch($id, $produto, $seq);
        }
        
        return ;

    }
}
