<?php

namespace App\Http\Controllers;

use App\Models\tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('tarea.tarea', ['tareas' => tarea::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tarea.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //insertar datos en la base de datos
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'responsable' => 'required|string|max:255',
            'estado' => 'required|string|in:pendiente,en progreso,completada',
            'fecha_limite' => 'required|date',
        ]);


        tarea::create($request->all()); 
        return redirect()->route('tarea.index')->with('success', 'Tarea creada correctamente'); 
        

    }

    /**
     * Display the specified resource.
     */
    public function show(tarea $tarea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
        $tarea = tarea::findOrFail($id);
        return view('tarea.edit', ['tarea' => $tarea]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tarea $tarea)
    {
        //
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'responsable' => 'required|string|max:255',
            'estado' => 'required|string|in:pendiente,en progreso,completada',
            'fecha_limite' => 'required|date',
        ]);     
        $tarea->update($request->all());
        return redirect()->route('tarea.index')->with('success', 'Tarea actualizada correctamente');    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tarea $tarea)
    {
        //
        $tarea->delete();
        return redirect()->route('tarea.index')->with('success', 'Tarea eliminada correctamente');
    }
}
