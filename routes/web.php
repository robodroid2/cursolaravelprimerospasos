<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
//forma 1 de importar abajo
//use App\Http\Controllers\TestController;



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

//forma 1 de importar abajo
//Route::get('/',[TestController::class,'test']);


//forma 2 de importar es mejor ****
//Route::get('/',[App\Http\Controllers\TestController::class,'test']);


Route::get('/',[TestController::class,'index']);

/*


ejemplos laravel de rutas

Route::get('/', function () {
    return view('welcome');
});

Route::get('/escribeme', function () {
    return view('contacto');
})->name('contacto');


route::get('/custom', function () {

    $msj = "Mesaje desde el server";

    $data = ['msj'=>$msj,"edad"=>15];

    return view('custom',$data);
});  

*/