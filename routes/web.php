<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
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


Route::get('/', function (){
    return "hola";
});

Route::get('blog', [BlogController::class, "index"]);

Route::get('blog/{category}', [BlogController::class, "indexCategory"]);

Route::get('blog/{category}/{post}', [BlogController::class, "show"]);

//Route::get('blog/{category}/{post}', 'BlogController@show'); //laravel 8 para abajo

/*
para que funcionen las rutas antiguas se debe ir al app/providers/RouteServiceProvider
y ahi se crea un
protected $namespace = 'App\Http\Controllers'

y en el metodo boot() llaman al archivo routes/web.php que es donde estan las rutas
y se llama el namespace dentro de la ruta middleware
->namespace($this->namespace)

quedaria de esta manera

    Route::middleware('web')
        ->namespace($this->namespace)
        ->group(base_path('routes/web.php'));
*/
