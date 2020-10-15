<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Preco;

class PrecoController extends Controller
{
    
    public function index()
    {
        return Preco::all();
    }

    public function store(Request $request)
    {
        Preco::create($request->all());
    }

    
    public function show($id)
    {
        return Preco::findOrFail($id);
    }

   
    public function update(Request $request, $id)
    {
        $preco = Preco::findOrFail($id);
        $preco->update($request->all());
    }

    public function destroy($id)
    {
        $preco = Preco::findOrFail($id);
        $preco->delete();
    }
}
