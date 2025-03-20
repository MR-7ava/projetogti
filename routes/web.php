<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return "o codigo esta tentando";
});

Route::get('/usuario/{nome}', function ($nome) {
    return "usuario e atual ". $nome;
});

Route::get('/soma/{num1}/{num2}', function ($num1, $num2) {
    return "A soma é". $num1 + $num2;
});

Route::get('/divisao/{num1}/{num2}', function ($num1, $num2) {
    return "A divisao é". $num1 / $num2;
});


