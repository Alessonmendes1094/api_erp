<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produtos;

class ProdutoController extends Controller
{
    
    public function index()
    {
        return Produtos::all();
    }

    
    public function store(Request $request)
    {
        Produtos::create($request->all());
    }

    
    public function show($id)
    {
        return Produtos::findOrFail($id);
    }


    
    public function update(Request $request, $id)
    {
        $produto = Produtos::findOrFail($id);
        $produto->update($request->all());
    }

    
    public function destroy($id)
    {
        $produto = Produtos::findOrFail($id);
        $produto->delete();
    }
}
