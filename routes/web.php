<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobrenosController;
use App\Http\Controllers\TestController;
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

Route::get('/', [PrincipalController::class, 'index'])->name('home');

Route::get('/sobre-nos', [SobrenosController::class, 'index']);

Route::get('/contato', [ContatoController::class, 'index']);
Route::post('/contato', [ContatoController::class, 'index']);

Route::get('/login', function () {
    return 'login';
});

Route::prefix('/app')->group(function () {

    Route::get('/clientes', function () {
        return 'clientes';
    });

    Route::get('/fornecedores', [FornecedorController::class, 'index']);

    Route::get('/produtos', function () {
        return 'produtos';
    });
});

//Rota de Contigência(Fallback) -> E uma rota que será disponibilizada para o Usuário,
//Caso a rota acessada não seja localizada. Dentro do sistema de rotas da aplicação.
Route::fallback(function () {
    echo 'Rota acessada não foi encontrada. <a href="/"> Clique aqui </a> para voltar para a página inicial';
});

Route::get('/rotatest/{p1}/{p2}', [TestController::class, 'test']);

//primeiro tipo de Redirecionamento de rotas.
//Route::redirect('/rota2', '/rota1');

/*
Route::get('/rota2', function () {
    return redirect()->route('site.rota1'); //Segunda forma de criar um redirecionamento de rota
})->name('site.rota2');
*/
