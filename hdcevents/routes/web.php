<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Kauan";
    $idade = 17;

    $arr = [10, 20, 30, 40, 50];

    $nomes = ['Talles', 'Kauan', 'João', 'Carlos'];

    return view(
        'welcome',
        [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => 'Programador',
            'arr' => $arr,
            'nomes' => $nomes
        ]
    );
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtos/{id}', function ($id) {
    return view('product', ['id' => $id]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});