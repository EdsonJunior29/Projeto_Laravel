<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobrenosController;
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

Route::get('/', [PrincipalController::class, 'index']);

Route::get('/sobre-nos', [SobrenosController::class, 'index']);

Route::get('/contato', [ContatoController::class, 'index']);

Route::get('/login', function () {
    return 'login';
});

Route::prefix('/app')->group(function () {

    Route::get('/clientes', function () {
        return 'clientes';
    });

    Route::get('/fornecedores', function () {
        return 'fornecedores';
    });

    Route::get('/produtos', function () {
        return 'produtos';
    });
});

/*
Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem}', function (
    string $nome, string $categoria, string $assunto, string $mensagem) {
        echo "Chegamos aqui..... - $nome - $categoria - $assunto - $mensagem";
});

// Tornando parâmetro opcionais-> adicionando o sinal de '?' após o mesmo
// e adicionar valor padrão dentro da função callback.
//Se todos os parâmetros forem declarados como opcionais e tiverem valores padrões
//teremos que passar os valores da direita para a esquerda na URL.
Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem?}', function (
    string $nome,
    string $categoria,
    string $assunto,
    string $mensagem = ''
) {
    echo "Chegamos aqui..... - $nome - $categoria - $assunto - $mensagem";
});

//Aplicando expressões regulares para tratamento dos parâmetros das rotas.
Route::get('/contato/{nome}/{categoria_id}/', function (string $nome, int $categoria_id = 1) {
    echo "Chegamos aqui..... - $nome - $categoria_id";
})->where('nome', '[A-Za-z]+')->where('categoria_id', '[0-9]+');
*/
