<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;


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
// sin controlador
// Route::get('/', function () {
//    // return view('welcome');
//    return "Bienvenido a la pagina principal";
// });

// con controlador
Route::get('/', HomeController::class); // busca el metodo invoke

Route::get('/cursos', [CursoController::class, 'index']);

Route::get('cursos/create', [CursoController::class,'create']);

// Route::get('/cursos/{curso}', function ($curso) {
//     // return view('welcome');
//     return "Bienvenido a la pagina del curso: $curso ";
// });

// no colocar logica en router, es mejor generar un controlador
// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
//     if($categoria){
//         return "bienvenido al curso: $curso, de la categoria: $categoria";    
//     }else{
//         return "bienvenido al curso: $curso";    
//     }    
// });

Route::get('cursos/{curso}/{categoria?}', [CursoController::class,'show']);






///////////////// Uso de rutas antes de laravel 8 ///////////////7

//Route::get('/', 'HomeController'); // busca el metodo invoke
//Route::get('/cursos', 'HomeController@index'); // busca otra funcion