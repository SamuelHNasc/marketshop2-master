<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produto;

Route::get('/homeartisan migrate:fresh', function () {
    return view('welcome');
});

//Route::view('/', 'home');
Route::get('/', function (){
    //dd(Produto::all());

    $listaProdutos = Produto::all();

    return view('home', compact('listaProdutos'));
});

Route::view('/testedeconteudo', 'teste');

Route::view('/criar-conta', 'Criar-Conta');

Route::post('/salvar-usuario', function (Request $request){
    //dd($request);
    $usuario = new User();
    $usuario->name = $request->nome;
    $usuario->email = $request->email;
    $usuario->password = $request->senha;
    $usuario->save();
    //dd("Salvo com Sucesso!!!");

    return redirect('/login');
})->name('salvar-usuario');

//-------------------------- PRODUTOS --------------------------

Route::view('/cadastrar-produto', 'cadastrar-produto')->middleware('auth');

Route::post('/salvar-produto', 
function (Request $request) {
    
    //dd($request);
    $produto = new Produto();
    $produto->nome = $request-> nome;
    $produto->descricao = $request-> descricao;
    $produto->valor = $request-> valor;

    // Pega o arquivo enviado
    $file = $request->file('foto');

    //Salva na pasta fotos, subpasta produtos
    $foto = $file->store('produtos', ['disk' => 'fotos']);

    // Adiciona foto ao produto
    $produto->foto = $foto;

    // Pega o ID do usuário que salvou a foto
    $produto->user_id = 1;

    //Salva o produto no banco de dados
    $produto->save();
    //dd("Salvo com Sucesso!!!");

    return redirect('/');

})->name('salvar-produto')->middleware('auth');


//----------------------------------LOGIN--------------------------------
// Abre tela de login

Route::view('/login', "login")->name("login");

Route::post('/logar', function (Request $request) { 
    //testar se está recebendo os dados. depois apagar 
    //dd($request);

    //verifica se a pessoa preencheu os campos de login
    $credentials = $request->validate([ 
        'email' => ['required', 'email'], //verifica se tem email e se é email 
        'senha' => ['required'], //verifica se tem senha
    ]);
    //compara se os dados no banco de dados são iguais o que ele preencheu
    if (Auth::attempt(['email' => $request->email, 'password' => $request->senha])) {
        //cria a sessão do usuário logado
        $request->session()->regenerate();
        //redireciona para a tela de cadastro de produtos
        return redirect()->intended('/cadastrar-produto');
    } else {
        dd("Usuário ou senha incorretos");
    }


})->name('logar');

Route::get('/sair', function () {
    Auth::logout();
    return redirect('/');
});