<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/pedidos', function () {
    return view('pedidos');
});

Route::get('/libros', function () {
    return view('libros');
});
