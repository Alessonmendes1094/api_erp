<?php

namespace App\Repository;

use App\Models\Produtos;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

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

        $client = new Client([
            // URI de base é usado com solicitações relativas
            'base_uri' => env('APP_NAME'),
            // Você pode definir qualquer número de opções de solicitação padrão.
            'timeout' => 20.0,
        ]);

        $seq = 0;

        foreach ($produtos as $produto) {
            $seq = $seq + 1;
            $response = $client->request('POST', 'api/produto', [
                'form_params' => [
                    'prod_codigo' => $produto['proc_codigo'],
                    'prod_descricao' => $produto['proc_descricao'],
                    'prod_qtde' => $produto['proc_qemb'] * $produto['proc_qtde'],
                    'prod_barras' => $produto['proc_codbarras'],
                    'prod_cotacao_id' => $id,
                    'prod_complemento' => $produto['proc_complemento'],
                    'prod_sequencial' => $seq,
                ],
            ]);
        }

    }
}
