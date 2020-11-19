<?php

namespace App\Repository;

use App\Models\Preco;
use GuzzleHttp\Client;

class PrecoRepository
{

    public function precosCotacao($id)
    {
        $client = new Client([
            // URI de base é usado com solicitações relativas
            'base_uri' => env('APP_NAME'),
            // Você pode definir qualquer número de opções de solicitação padrão.
            'timeout' => 20.0,
        ]);

        $response = $client->request('GET', 'api/pr3c0/' . $id, ['query' => ['foo' => 'bar']]);

        $body = (string) $response->getBody();

        return $body;

    }

    public function salvarPrecos($precos)
    {
        foreach ($precos as $preco) {

            $movcotacao = new Preco();
            $movcotacao->mcot_forn_codigo = $preco->codigo;
            $movcotacao->mcot_prod_codigo = $preco->prod_codigo;
            $movcotacao->mcot_preco = $preco->prodpr_valor;
            $movcotacao->mcot_icms = 0;
            $movcotacao->mcot_subtrib = 0;
            $movcotacao->mcot_perc = 0;
            $movcotacao->mcot_frete = 0;
            $movcotacao->mcot_fpgt_codigo = '';
            $movcotacao->mcot_data = date('Y-m-d');
            $movcotacao->mcot_unid_codigo = '001';
            $movcotacao->mcot_espe_codigo = '';
            if($preco->observacao <> null){
                $movcotacao->mcot_obs = $preco->observacao;
            } else {
                $movcotacao->mcot_obs = '';
            }
            $movcotacao->mcot_fcpst = 0;
            $movcotacao->save();

        }

        return;

    }
}
