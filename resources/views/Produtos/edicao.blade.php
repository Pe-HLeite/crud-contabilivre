@extends('main')

@section('content')
<div class="container mt-5">
    <h1>Editar produto</h1>
    <hr>
    <form action="{{ route('produto-atualizado', ['id' => $produto->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group p-3">
            <div class="card">
                <div class="card-body row g-2">
                    <div class="form-group col-12 col-sm-6">
                        <label for="identificador_nome"><b>Nome do produto: </b></label>
                        <input id="identificador_nome" name="nome_produto" value="{{ $produto->nome ?? '' }}" placeholder="Informe o Nome do Produto" type="text" class="form-control mt-2">
                    </div>
                    <div class="form-group col-12 col-sm-6">
                        <label for="identificador_quantidade"><b>Quantidade: </b></label>
                        <input id="identificador_quantidade" name="quantidade_produto" value="{{ $produto->quantidade ?? '' }}" placeholder="Informe a Quantidade" type="number" class="form-control mt-2">
                    </div>
                    <div class="form-group col-12">
                        <label for="identificador_ano_fabricacao"><b>Ano de fabricação: </b></label>
                        <select id="identificador_ano_fabricacao" name="fabricacao_produto" class="form-select mt-2">
                            <option selected>Selecione o ano de fabricação</option>
                            <option value="0" @selected($produto->fabricacao == 0)>2020</option>
                            <option value="1" @selected($produto->fabricacao == 1)>2021</option>
                            <option value="2" @selected($produto->fabricacao == 2)>2022</option>
                            <option value="3" @selected($produto->fabricacao == 3)>2023</option>
                            <option value="4" @selected($produto->fabricacao == 4)>2024</option>
                            <option value="5" @selected($produto->fabricacao == 5)>2025</option>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label for="identificador_descricao"><b>Descrição: </b></label>
                        <input id="identificador_descricao" name="descricao_produto" value="{{ $produto->descricao ?? '' }}" placeholder="Descreva melhor sobre o produto" type="text" class="form-control mt-2">
                    </div>
                    <div class="form-group col-12  d-flex justify-content-between p-3 pb-0">
                        <button class="btn btn-danger">
                            <i class="fa-regular fa-trash-can"></i> Deletar
                        </button>

                        <button class="btn btn-success">
                            <i class="fa-regular fa-pen-to-square"></i> Atualizar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection