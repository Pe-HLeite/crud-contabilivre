@extends('main')

@section('content')
<div class="container mt-5">
    <h1>Editar produto</h1>
    <hr>
    <form action="#" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group col-12">
                <label for="identificador_nome"><b>Nome do produto: </b></label>
                <input id="identificador_nome" name="nome_produto" value="{{ $produto->nome }}" placeholder="Informe o Nome do Produto" type="text" class="form-control mt-2">
            </div>
            <div class="form-group col-12">
                <label for="identificador_quantidade"><b>Quantidade: </b></label>
                <input id="identificador_quantidade" name="quantidade_produto" placeholder="Informe a Quantidade" type="number" class="form-control mt-2">
            </div>
            <div class="form-group col-12">
                <label for="identificador_ano_fabricacao"><b>Ano de fabricação: </b></label>
                <select id="identificador_ano_fabricacao" name="fabricacao_produto" class="form-select mt-2">
                    <option selected>Selecione o ano de fabricação</option>
                    <option value="0">2020</option>
                    <option value="1">2021</option>
                    <option value="2">2022</option>
                    <option value="3">2023</option>
                    <option value="4">2024</option>
                    <option value="5">2025</option>
                </select>
            </div>
            <div class="form-group col-12">
                <label for="identificador_descricao"><b>Descrição: </b></label>
                <input id="identificador_descricao" name="descricao_produto" placeholder="Descreva melhor sobre o produto" type="text" class="form-control mt-2">
            </div>
            <div class="form-group col-12  d-flex justify-content-end p-3">
                <input type="submit" name="submit" class='btn btn-primary'>
            </div>
        </div>
    </form>
</div>
@endsection