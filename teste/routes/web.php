<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/teste', function()
{
    echo "Olá!";
});

Route::get('/ola/{nome}/{sobrenome}', function($nome, $sobrenome)
{
    echo "Olá! seja bem vindo, $nome $sobrenome !";
});

Route::get('/seunome/{nome?}', function($nome=null)
{
    if (isset($nome))
    {
        echo "Olá! seja bem vindo, $nome!";
    }
    else
    {
        echo "Você não digitou nenhum nome!";
    }
});

Route::get('/rotaregras/{nome}/{n}', function($nome, $n)
{
    for ($i = 0; $i<$n; $i++)
    {
        echo $nome . '<br>';
    }    
})-> where('nome', '[A-Za-z]+')
  -> where('n', '[0-9]+');

Route::prefix('/app')-> group(function(){

    Route::get('/', function(){
        return view('app');
    })->name('app');

    Route::get('/user', function(){
        return view('user');
    })->name('app.user');

    Route::get('/profile', function(){
        return view('profile');
    })->name('app.profile');
   
});

Route::get('/produtos', function(){
    echo "<h1>Produtos</h1>";
    echo "<ol>";
    echo "<li>Notebook</li>";
    echo "<li>Impressora</li>";
    echo "<li>Mouse</li>";
    echo "</ol>";
})->name('meusprodutos');

Route::redirect('todosprodutos', 'produtos', 301);

Route::get('todosprodutos2', function(){
    return redirect() -> route('meusprodutos');
});


/////////////////////////////////////////////

Route::post('/requisicoes', function(Request $requisicoes){
    return 'Hello POST';
});

Route::delete('/requisicoes', function(Request $requisicoes){
    return 'Hello DELETE';
});

Route::put('/requisicoes', function(Request $requisicoes){
    return 'Hello PUT';
});

Route::patch('/requisicoes', function(Request $requisicoes){
    return 'Hello PATCH';
});

Route::options('/requisicoes', function(Request $requisicoes){
    return 'Hello OPTIONS';
});
*/

Route::get('/', function(){
    return view('Welcome');
});
Route::get('departamentos', function(){
    return view('outras.departamentos');
})->name('departamentos');
Route::get('produtos', function(){
    return view('outras.produtos');
})->name('produtos');
Route::get('nome', 'MeuControlador@nome');
Route::get('multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar');

Route::resource('clientes', 'ClienteController');
//função acima engloba =
/*
Route::get('cliente/nome', 'ClienteControlador@index');
Route::get('cliente/nome', 'ClienteControlador@create');
Route::get('cliente/nome', 'ClienteControlador@store');
Route::get('cliente/nome', 'ClienteControlador@show');
Route::get('cliente/nome', 'ClienteControlador@edit');
Route::get('cliente/nome', 'ClienteControlador@update');
Route::get('cliente/nome', 'ClienteControlador@destroy');
*/

Route::get('opcoes/{opcao?}', function($opcao=null){
    return view('outras.opcoes', compact(['opcao']));
})->name('opcoes');


Route::get('bootstrap', function(){
    return view('outras.exemplo');
})->name('exemplo');

