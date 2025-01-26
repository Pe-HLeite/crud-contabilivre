@extends('master')

@section('content')
<div class="container p-4">
    <div class="card">
        <div class="card-body">
            <div class="navbar m-2">
                <div class="container-fluid">
                    <a href="{{ route('produtos.index') }}">
                        <button class="btn btn-sm">
                            <i class="fa-solid fa-arrow-left"></i> 
                        </button>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <h1>{{ $produto->id ? 'Editar' : 'Criar' }} produto</h1>
            </div>
            <hr>
            <form action="{{ $produto->id ? route('produtos.update', $produto->id) : route('produtos.store')}}" method="POST" required>
            @csrf
            @if($produto->id)
                @method('PUT')
            @endif
                <div class="form-group p-4 row g-2 pb-1">
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
                            <option value="0" @if($produto->fabricacao == 0) selected @endif>2020</option>
                            <option value="1" @if($produto->fabricacao == 1) selected @endif>2021</option>
                            <option value="2" @if($produto->fabricacao == 2) selected @endif>2022</option>
                            <option value="3" @if($produto->fabricacao == 3) selected @endif>2023</option>
                            <option value="4" @if($produto->fabricacao == 4) selected @endif>2024</option>
                            <option value="5" @if($produto->fabricacao == 5) selected @endif>2025</option>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label for="identificador_descricao"><b>Descrição: </b></label>
                        <textarea id="identificador_descricao" name="descricao_produto" value="{{ $produto->descricao ?? '' }}" placeholder="Descreva melhor sobre o produto" type="text" class="form-control mt-2">{{ $produto->descricao ?? '' }}</textarea>
                    </div>
                    <div class="d-flex justify-content-end pt-3 pb-0">                     
                        @if($produto->id)
                        <button type="submit" class="btn btn-success btn-sm">
                            <i class="fa-solid fa-check"></i>
                            Atualizar
                        </button>
                        @else
                        <button type="submit" class="btn btn-success btn-sm">
                            <i class="fa-solid fa-check"></i>
                            Cadastrar
                        </button>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection