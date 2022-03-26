<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenerosController extends Controller
{
    //id, genero
    public function index() {
        $generos = Genero::select('id', 'genero')->get();
        return $generos;
    }
}
