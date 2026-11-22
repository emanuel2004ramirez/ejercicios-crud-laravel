<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    //Metodos del CRUD
    //Mostrar 1
    public function index(){
        $libros = Libro::orderBy('id')->get();
        return view('libros.index', ['libros' => $libros]);
    }
    //Mostrar 2

    //Guardar 1
    //Guardar 2

    //Actualizar 1
    //Actualizar 2

    //Eliminar 1
    //Eliminar 2
}
