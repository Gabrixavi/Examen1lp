<?php

namespace App\Http\Controllers;
namespace App\Models\directorio;

use Illuminate\Http\Request;

class directorios extends Controller
{
    public function create(){
        return view('crearEntrada');
    }

    public function search(){
        return view('buscar');
    }

}
