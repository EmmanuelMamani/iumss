<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class certificadoController extends Controller
{
    function ver_registrar(){
        return view('registrar_certificado');
    }
}
