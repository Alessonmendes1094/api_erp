<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use GuzzleHttp\Client;


class JobProdutoAPI implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $id;
    private $produto;
    private $seq;
    
    public function __construct($id,$produto,$seq)
    {
        $this->id = $id;  
        $this->produto = $produto; 
        $this->seq = $seq; 
    }

    
    public function handle()
    {
        $client = new Client([
            // URI de base é usado com solicitações relativas
            'base_uri' => env('APP_NAME'),
            // Você pode definir qualquer número de opções de solicitação padrão.
            'timeout' => 20.0,
        ]);

        $response = $client->request('POST', 'api/produto', [
            'form_params' => [
                'prod_codigo' => $this->produto['proc_codigo'],
                'prod_descricao' => $this->produto['proc_descricao'],
                'prod_qtde' => $this->produto['proc_qemb'] * $this->produto['proc_qtde'],
                'prod_barras' => $this->produto['proc_codbarras'],
                'prod_cotacao_id' => $this->id,
                'prod_complemento' => $this->produto['proc_complemento'],
                'prod_sequencial' => $this->seq,
            ],
        ]);
    }
}
