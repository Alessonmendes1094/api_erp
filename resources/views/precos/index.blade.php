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
            <h5>Existem {{$qtd}} preços a serem exportados da cotação {{ $cotacao }} para o ERP, confirma exportação?</h5>
            <a href="{{route('preco.salvar' , $id)}}" class="waves-effect waves-light btn blue aguarde">Exportar
                <i class="material-icons right">arrow_downward</i>
            </a>
        </div>
    </div>
</div>
@endsection