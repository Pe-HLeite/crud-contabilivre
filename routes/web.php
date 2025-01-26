<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produto\ProdutoController;
use App\Http\Controllers\UpDownload\UpDownloadController;
use App\Http\Controllers\Usuario\UsuarioController;

Route::view('', 'master');
Route::resource('produtos', ProdutoController::class);

Route::resource('usuarios', UsuarioController::class);

Route::resource('upDownloads', UpDownloadController::class);
