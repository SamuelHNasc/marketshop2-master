<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/homeartisan migrate:fresh', function () {
    return view('welcome');
});

Route::view('/', 'home');

Route::view('/testedeconteudo', 'teste');

Route::view('/criar-conta', 'Criar-Conta');

Route::post('/salvar-usuario', function (Request $request){
    dd($request);
})->name('salvar-usuario');