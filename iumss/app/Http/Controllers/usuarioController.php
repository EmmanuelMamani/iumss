<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
    function login(){
        return redirect('/perfil');
    }
}
