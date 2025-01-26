@extends('master')

@section('content')
<div class="container p-4">
    <div class="card">
        <div class="card-body">
            <div class="navbar m-2">
                <div class="container-fluid">
                    <a href="{{ route('usuarios.index') }}">
                        <button class="btn btn-sm">
                            <i class="fa-solid fa-arrow-left"></i> 
                        </button>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <h1>{{ $usuario->id ? 'Editar' : 'Criar' }} usuário</h1>
            </div>
            <hr>
            <form action="{{ $usuario->id ? route('usuarios.update', $usuario->id) : route('usuarios.store')}}" method="POST" required>
            @csrf
            @if($usuario->id)
                @method('PUT')
            @endif
                <div class="form-group p-4 row g-2 pb-1">
                    <div class="form-group col-12 col-sm-6">
                        <label for="identificador_nome"><b>Nome do usuario: </b></label>
                        <input id="identificador_nome" name="nome_usuario" value="{{ $usuario->nome ?? '' }}" placeholder="Informe o Nome do usuario" type="text" class="form-control mt-2">
                    </div>
                    <div class="form-group col-12 col-sm-6">
                        <label for="identificador_idade"><b>Idade: </b></label>
                        <input id="identificador_idade" name="idade_usuario" value="{{ $usuario->idade ?? '' }}" placeholder="Informe a idade" type="number" class="form-control mt-2">
                    </div>
                    
                    <!-- O campo de empresa deve ser um select com todos os registros das empresas cadastradas -->
                    <div class="form-group col-12 col-sm-6">
                        <label for="identificador_empresa"><b>Empresa: </b></label>
                        <select id="identificador_empresa" name="empresa_usuario" class="form-select mt-2">
                            <option selected>Selecione o empresa</option>
                            <option value="0" @if($usuario->empresa_id == 0) selected @endif>Empresa 000</option>
                            <option value="1" @if($usuario->empresa_id == 1) selected @endif>Empresa 001</option>
                            <option value="2" @if($usuario->empresa_id == 2) selected @endif>Empresa 002</option>
                        </select>
                    </div>

                    <!-- O campo de cargo deve ser um select com todos os registros dos cargos da empresa selecionada a cima -->
                    <div class="form-group col-12 col-sm-6">
                        <label for="identificador_empresa"><b>Cargo: </b></label>
                        <select id="identificador_empresa" name="cargo_usuario" class="form-select mt-2">
                            <option selected>Selecione o cargo atual</option>
                            <option value="0" @if($usuario->cargo == 0) selected @endif>Cargo 000</option>
                            <option value="1" @if($usuario->cargo == 1) selected @endif>Cargo 001</option>
                            <option value="2" @if($usuario->cargo == 2) selected @endif>Cargo 002</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-end pt-3 pb-0">                     
                        @if($usuario->id)
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