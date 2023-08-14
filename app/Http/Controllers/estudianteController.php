<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class estudianteController extends Controller
{
    //
    function perfil(){
        return view('perfil');
    }
    function cambiar_info(){
        return view('cambiar_info');
    }
}
