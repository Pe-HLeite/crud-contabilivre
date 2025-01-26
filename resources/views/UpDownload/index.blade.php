@extends('master')

@section('content')
<div class="container p-4">
    <div class="row">
        <div class="col-sm-10">
            <h1>Upload/ Download</h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-body">
                    <div id="actions" class="row">
                        <div class="col-lg-12">
                            <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" id="fileInput" hidden>
                                <div class="btn-group w-100">
                                    <span class="btn btn-success col fileinput-button dz-clickable"  onclick="document.getElementById('fileInput').click()">
                                        <i class="fas fa-plus"></i>
                                        <span>Adicionar arquivo</span>
                                    </span>
                                    <button type="submit" class="btn btn-primary col start">
                                        <i class="fas fa-upload"></i>
                                        <span>Enviar</span>
                                    </button>
                                    <button type="reset" class="btn btn-warning col cancel">
                                        <i class="fas fa-times-circle"></i>
                                        <span>Cancelar envio</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection