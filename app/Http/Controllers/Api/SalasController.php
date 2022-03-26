<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalasController extends Controller
{
    //id, sala
    public function index() {
        $salas = Sala::select('id', 'sala')->get();
        return $salas;
    }
}
