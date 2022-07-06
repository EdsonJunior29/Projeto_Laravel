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

//recebendo 1 parametro via URL
Route::get('/contato/{nome}', function (string $nome) {
    echo 'Chegamos aqui....'. $nome;
});

//recebendo 2 parametro via URL
Route::get('/contato/{nome}/{sobrenome}', function (string $nome, string $sobrenome) {
    echo 'Chegamos aqui....'. $nome . $sobrenome;
});
