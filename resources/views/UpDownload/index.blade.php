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
                        <div class="col-lg-6">
                            <div class="btn-group w-100">
                                <span class="btn btn-success col fileinput-button dz-clickable">
                                    <i class="fas fa-plus"></i>
                                    <span>Add files</span>
                                </span>
                                <button type="submit" class="btn btn-primary col start">
                                    <i class="fas fa-upload"></i>
                                    <span>Start upload</span>
                                </button>
                                <button type="reset" class="btn btn-warning col cancel">
                                    <i class="fas fa-times-circle"></i>
                                    <span>Cancel upload</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupFile01">Upload</label>
        <input type="file" class="form-control" id="inputGroupFile01">
    </div>
</div>
@endsection