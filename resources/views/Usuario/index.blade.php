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
                            <button  class="btn btn-danger btn-sm">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection