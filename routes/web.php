<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;


Route:: get('/teste', function () {
    return view('Login/login');
});

Route:: get('/', function () {
    return view('TelaInicial/telaInicial');
})->name('inicio');


Route::prefix('produto')->group(function() {
    Route::get('', [ProdutosController::class, 'index'])->name('produto-listagem');
    Route::get('/{id}', [ProdutosController::class, 'show'])->name('produto-edicao');

    Route::get('/cadastro', [ProdutosController::class, 'create'])->name('produto-cadastro');
    Route::post('/', [ProdutosController::class, 'store'])->name('produto-salvo');
});
