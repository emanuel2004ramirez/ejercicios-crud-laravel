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
    public function create(){
        return view('libros.create');
    }
    //Guardar 2
    public function store(){
        $datos = request()->validate([
            'codigo' => 'required',
            'titulo' => 'required',
            'autor' => 'required',
            'anio_publicacion' => 'required|integer',
        ]);
        $libro = new Libro();
        $libro->codigo = $datos['codigo'];
        $libro->titulo = $datos['titulo'];
        $libro->autor = $datos['autor'];
        $libro->anio_publicacion = $datos['anio_publicacion'];
        $libro->save();
        return redirect()->route('libros.index')
            ->with('success', 'Libro creado correctamente');
        
    }

    //Actualizar 1
    //Actualizar 2

    //Eliminar 1
    //Eliminar 2
}
