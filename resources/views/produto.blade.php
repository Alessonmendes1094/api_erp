@extends('layout.site')

@section('titulo','Cotação de Compra')

@section('conteudo')
<div class="container">
    <div class="card">
        <div class="card-content">
            <div class='row'>

            </div>
            <span class="card-title">Conexão Efetuada</span>
            <hr>
            <h5>Existem {{$qtd}} produtos a serem importados do ERP para o cotação</h5>
            <a href="{{route('produto.salvar' , $id)}}" class="waves-effect waves-light btn blue">Importar
                <i class="material-icons right">arrow_upward</i>
            </a>
        </div>
    </div>
</div>
@endsection