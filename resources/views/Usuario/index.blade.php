@extends('master')

@section('content')
<div class="container p-4">
    <div class="row">
        <div class="col-sm-10">
            <h1>Listagem de Usuários</h1>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('usuarios.create') }}" class="btn btn-success btn-sm">
                <i class="fa-solid fa-plus"></i>
                Novo Usuário
            </a>
        </div>
    </div>

    <div class="accordion m-4">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed gap-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <span>Filtros</span>
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <form id="form-usuarios" action="{{ route('usuarios.index') }}">
                        <div class="form-group p-4 row g-2 pb-1">
                            <div class="form-group col-12 col-sm-6">
                                <label for="identificador_nome"><b>Nome do Usuario: </b></label>
                                <input id="identificador_nome" name="nome_usuario" placeholder="Informe o Nome do Usuário" type="text" class="form-control mt-2">
                            </div>
                            <!-- <div class="form-group col-12">
                                <label for="identificador_descricao"><b>Descrição: </b></label>
                                <textarea id="identificador_descricao" name="descricao_produto" placeholder="Descreva melhor sobre o produto" type="text" class="form-control mt-2">{{ $produto->descricao ?? '' }}</textarea>
                            </div> -->
                            <div class="d-flex justify-content-between pt-3 pb-0">
                                <button type="reset" class="btn btn-secondary btn-sm" onclick="window.location.href='{{ route('usuarios.index')}}'">
                                    <i class="fa-solid fa-eraser"></i>
                                    Limpar
                                </button>
                                <button type="submit" class="btn btn-success btn-sm">
                                    <i class="fa-solid fa-check"></i>
                                    Filtrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-5">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">idade</th>
                        <th scope="col">Empresa</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                    <tr>
                        <th>{{ $usuario->id }}</th>
                        <th>{{ $usuario->nome}}</th>
                        <th>{{ $usuario->idade}}</th>
                        <th>{{ $usuario->empresa_id}}</th>
                        <th>{{ $usuario->cargo}}</th>
                        <th>
                            <a href="{{ route('usuarios.edit', ['usuario' => $usuario->id]) }}" class="btn btn-primary btn-sm">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                        </th>
                        <th>
                            <form action="{{ route('usuarios.destroy', ['usuario' => $usuario->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button  class="btn btn-danger btn-sm">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </form>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection