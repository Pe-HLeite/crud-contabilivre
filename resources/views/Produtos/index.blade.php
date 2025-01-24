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
                <th scope="col">Quantidade</th>
                <th scope="col">Ano de Fabricação</th>
                <th scope="col">Descrição</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <th>{{ $produto->id }}</th>
                <th>{{ $produto->nome}}</th>
                <th>{{ $produto->quantidade}}</th>
                <th>{{ $produto->fabricacao }}</th>
                <th>{{ $produto->descricao }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection