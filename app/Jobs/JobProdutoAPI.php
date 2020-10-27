<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class JobProdutoAPI implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $produtos;
    private $id;
    
    public function __construct($produtos,$id)
    {
        $this->produtos = $produtos;   
        $this->id = $id;   
    }

    
    public function handle()
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
