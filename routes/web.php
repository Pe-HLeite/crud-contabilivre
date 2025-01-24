<?php

use Illuminate\Support\Facades\Route;


Route:: get('/teste', function () {
    return view('Login/login');
});

Route:: get('/', function () {
    return view('TelaInicial/telaInicial');
})->name('inicio');


Route::prefix('produto')->group(function() {
    Route::get('/listagem', function() { return view('Produtos/index'); })->name('produto-listagem');

    Route::get('/cadastro', function() { return view('Produtos/cadastro'); })->name('produto-cadastro');
});
