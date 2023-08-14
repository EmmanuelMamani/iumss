<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tituloController extends Controller
{
    function ver_registrar(){
        return view('registrar_titulo');
    }
}
