<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;

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

Route::get('/', [PrincipalController::class, 'principal']);
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos']);
Route::get('/contato', [ContatoController::class, 'contato']);


//#expressão regular
// Route::get(
//     '/contato/{nome}/{categoria_id}', 
//     function(
//         string $nome= 'Desconhecido', 
//         int $categoria_id = 1
//         ) {
//             echo "Estamos aqui: $nome  - $categoria_id";
//         }
//     )->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+'); 

//#pasagem de parametro com parametro opcional
// Route::get('/contato/{nome}/{categoria}/{assunto?}', function(string $nome, string $categoria, string $assunto = 'assunto não informado') {
//     echo "Estamos aqui: $nome  - $categoria  -  $assunto";
// });

