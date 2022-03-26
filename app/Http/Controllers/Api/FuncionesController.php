<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FuncionesController extends Controller
{
    //id, id_pelicula, id_sala, fecha, hora
    public function index() {
        $funciones = Funcion::select('id', 'id_pelicula', 'id_sala', 'fecha', 'hora')->get();
        return $funciones;
    }
}
