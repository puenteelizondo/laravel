<?php
//en este archivo se va encargar de organizar las vistas
// y tambien cuando se haga una consulta asignarle una vista al usuario
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //inovke es para que solo administre una sola ruta
    public function __invoke()
    {
        return response()->json(['test' => 'bienvenido a la pagina principal']);
    }
}
