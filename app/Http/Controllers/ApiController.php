<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;

class ApiController extends Controller
{
    public function inicio($id){
        
        $qtd = Produtos::count();

        return view('teste',compact('id','qtd'));
    }
}
