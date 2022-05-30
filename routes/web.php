<?php

use App\Http\Controllers\FornecedorController;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/','PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobre-nos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@salvar')->name('site.contato');
Route::get('/login', 'LoginController@index')->name('site.login');

Route::middleware('log.acesso')->prefix('/app')->group(function(){
    Route::get('/clientes', function(){})->name('app.clientes');
    /*
    Route::get('/fornecedores', function(){
        return redirect()->route('site.index');
    })->name('app.fornecedores');
    */
    Route::get('/fornecedores','FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){})->name('app.produtos');
});

Route::fallback(function(){
    echo "Essa rota não existe ";
});




/*
Route::get('/contato/{nome}/{sobrenome?}', function(string $nome,string $sobrenome = "sem sobrenome"){

    echo "Estamos aqui ".$nome."".$sobrenome;

});
*/

Route::get('/contato/{nome}/{categoria_id}',function(string $nome = "Genielson",
int $categoria_id = 1){

    echo "Estamos aqui ".$nome." - ".$categoria_id;

})->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');
