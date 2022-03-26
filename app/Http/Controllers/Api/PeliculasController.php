<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    //id, id_genero, nombre, director
    public function index() {
        $peliculas = Pelicula::select('id', 'id_genero', 'nombre', 'director')->get();
        return $peliculas;
    }
}
