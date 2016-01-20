<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return 'Home page do site';
});

/*Route::get('/contato', function(){
    return 'So pra confirmar =)';
});

Route::get('empresa', function(){
    return 'Descrição da empresa';
});

Route::post('cadastrar/user', function(){
    return 'Cadastrando usuário... ';
});

Route::match(['post', 'get'], '/match', function(){
    return 'Minha rota match';
});

Route::any('any', function(){
    return 'Rota do tipo any =)';
});


Route::group(['prefix' => 'painel', 'middleware' => 'my-middleware'], function(){

    Route::get('/', function(){
        return view('Painel.home.index');
    });

    Route::get('financeiro', function(){
        return view('Painel.financeiro.index');
    });

});

Route::get('/login', function(){
    return 'Formulário de Login';
});

*/

Route::get('produtos', 'produtoController@index');
Route::get('produto/create', 'produtoController@create');
Route::post('produto/create', 'produtoController@store');
Route::get('produto/{idProd}', 'produtoController@show');
Route::get('produto/edit/{idProduto}', 'produtoController@edit');



Route::controller('/carros', 'CarrosController');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
