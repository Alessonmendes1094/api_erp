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

        return view('produtos.produto',compact('id','qtd'));
    }

    public function salvarProdutos($id){
        
        $produtos = $this->produtosRepository->produtosErp();
        
        $retorno = $this->produtosRepository->enviarProdutos($id,$produtos);

        shell_exec('c:\WINDOWS\system32\cmd.exe /c START C:\xampp\htdocs\api_erp-master\start_job.bat');
        
        return view('produtos.produtoconfirm', compact('retorno'));
    }
    
}
