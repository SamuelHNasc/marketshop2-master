<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;

Route::get('/homeartisan migrate:fresh', function () {
    return view('welcome');
});

Route::view('/', 'home');

Route::view('/testedeconteudo', 'teste');

Route::view('/criar-conta', 'Criar-Conta');

Route::post('/salvar-usuario', function (Request $request){
    // dd($request);
    $usuario = new User();
    $usuario->name = $request->nome;
    $usuario->email = $request->email;
    $usuario->password = $request->senha;
    $usuario->save();
    dd("Salvo com Sucesso!!!");
})->name('salvar-usuario');