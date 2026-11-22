<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use Illuminate\Validation\Rule;

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
        'codigo' => 'required|string|unique:libros,codigo',
        'titulo' => 'required|string|max:150',
        'autor' => 'required|string|max:100',
        'anio_publicacion' => 'required|integer|between:1450,' . date('Y'),
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
    public function edit($id){
        $libro = Libro::findOrFail($id);
        return view('libros.edit', ['libro' => $libro]);
    }
    //Actualizar 2
    public function update(Request $request, $id){
        $datos = request()->validate([
        'codigo' => [
            'required',
            'string',
            Rule::unique('libros', 'codigo')->ignore($id),
        ],
        'titulo' => 'required|string|max:150',
        'autor' => 'required|string|max:100',
        'anio_publicacion' => 'required|integer|between:1450,' . date('Y'),
    ]);


        $libro = Libro::findOrFail($id);
        $libro->codigo = $datos['codigo'];
        $libro->titulo = $datos['titulo'];
        $libro->autor = $datos['autor'];
        $libro->anio_publicacion = $datos['anio_publicacion'];
        $libro->save();
        return redirect()->route('libros.index')
            ->with('success', 'Libro actualizado correctamente');
    }

    //Eliminar 1
    public function destroy($id){
        $libro = Libro::findOrFail($id);
        $libro->delete();
        return redirect()->route('libros.index')
            ->with('success', 'Libro eliminado correctamente');
    }
    //Eliminar 2
    
}
