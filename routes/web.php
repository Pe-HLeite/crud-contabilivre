<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route:: get('/teste', function () {
    return view('Login/login');
});

Route:: get('/tela-inicial', function () {
    return view('TelaInicial/telaInicial');
});
