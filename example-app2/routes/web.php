<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers;
use App\Http\Controllers\CursoController;


//Route::get('/', function () {
 //   return response()->json(['test' => 'bienvenido a la pagina principal']);
//});

//para definir una segunda ruta
//la url se llama cursos y agregamos una funcion anonima
/*Route::get('cursos', function(){

    return response()->json(['test' => 'bienvenido a la pagina cursos']);
});

Route::get('cursos/create', function () {
    return response()->json(['test' => 'En esta pagina puedes crear un curso']);

});


//para crear una ruta y mandar una variable en la url se hace de esta manera
// sirve como para un listado como un identificador dentro de una misma seccion
//sirve para sacar informacion de la url
Route::get('cursos/{curso}', function ($curso) {
    return response()->json(['test' => 'bienvenido a la pagina curso de '.$curso]);

});
*/
//queremos hacer una ruta para hacer el formulario para crear un curso
// En este caso nunca va a llegar a esta funcion porque se va interpretar como una varibale y entrara
// a la funcion anterior
//Route::get('cursos/create', function () {
//    return response()->json(['test' => 'En esta pagina puedes crear un curso']);
//});
// es por eso que el orden de las rutas deben de ir de manera ordenada


//si necesito mas variables se hace de esta manera
//Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria) {
 //   return response()->json(['test' => 'bienvenido a la pagina curso de '. $curso . ' de la categoria '. $categoria]);

//});

//si queremos que la variable sea opcional
/*Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    //si hay algo en la variable que imprima esto
    if($categoria){
        return response()->json(['test' => 'bienvenido a la pagina curso de '. $curso . ' de la categoria '. $categoria]);
    }else{
        return response()->json(['test' => 'En esta pagina puedes crear un curso']);
    }
});
*/
Route::get('/{home}', HomeController::class);

//Route::get('cursos', [CursoController::class, 'index']);

//Route::get('cursos/create', [CursoController::class, 'create']);

//Route::get('cursos/{curso}', [CursoController::class, 'show']);

Route::controller(CursoController::class)->group (function(){

    Route::get('cursos', 'index');

    Route::get('cursos/create', 'create');

    Route::get('cursos/{curso}', 'show');

});


