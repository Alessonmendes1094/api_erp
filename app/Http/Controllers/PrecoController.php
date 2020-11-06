<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\PrecoRepository;
use App\Preco;

class PrecoController extends Controller
{
    private $precoRepository;


    public function __construct(){
        $this->precoRepository = new PrecoRepository();
    }

    public function index($id,$qtd,$cotacao){
        return view('precos.index',compact('id','qtd','cotacao'));
    }

    public function salvarPrecos(){
        $precos = $this->produtosRepository->precosCotacao($id);

        return view('precos.index',compact('qtd','cotacao'));
    }
}
