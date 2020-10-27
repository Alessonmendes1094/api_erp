<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\ProdutoRepository;
use App\Produtos;

class ProdutoController extends Controller
{
    private $produtosRepository;


    public function __construct(){
        $this->produtosRepository = new ProdutoRepository();
    }

    public function index($id){
        $qtd = $this->produtosRepository->countProdutosErp();

        return view('produto',compact('id','qtd'));
    }

    public function salvarProdutos($id){
        $produtos = $this->produtosRepository->produtosErp();

        $this->produtosRepository->enviarProdutos($id,$produtos);

        redirect('http://cotacaocompass.com.br/' . env('APP_NAME') . '/public/cotacao/produto/'.$id);
    }
}
