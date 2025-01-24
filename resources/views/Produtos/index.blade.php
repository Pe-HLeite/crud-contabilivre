@extends('main')

@section('content')
<div class="container p-4">
    <div class="row">
        <div class="col-sm-10">
            <h1>Listagem de Produtos</h1>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('produto-cadastro') }}" class="btn btn-success">Novo Produto</a>
        </div>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        
    </table>
</div>

@endsection