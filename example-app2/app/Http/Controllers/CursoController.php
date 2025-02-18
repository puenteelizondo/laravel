<?php
//este controller se creo para manejar las 3 routes de cursos que forman parte de una misma seccion
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index (){
        return response()->json(['test' => 'bienvenido a la pagina cursos']);
    }
    public function create (){
        return response()->json(['test' => 'En esta pagina puedes crear un curso']);
    }
    public function show ($curso){

        return response()->json(['test' => 'bienvenido a la pagina curso de '.$curso]);
    }
}
