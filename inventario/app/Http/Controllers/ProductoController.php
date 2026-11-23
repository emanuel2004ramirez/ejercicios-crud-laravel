<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        $productos = Producto::all();
        return view('producto.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $producto = new Producto();
        $producto->codigo = $request->input('codigo');
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->existencia = $request->input('existencia');
        $producto->save();
        return redirect()->route('producto.index')->with('success', 'Producto creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
        return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
        $producto->codigo = $request->input('codigo');
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->existencia = $request->input('existencia');
        $producto->save();
        return redirect()->route('producto.index')->with('success', 'Producto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
