<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MascotaController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::all();

        return view('mascota.index', compact('mascotas'));
    }

    public function create()
    {
        return view('mascota.create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'codigo' => ['required', 'string', 'unique:mascotas,codigo'],
            'nombre' => ['required', 'string', 'max:80'],
            'especie' => ['required', Rule::in(['perro', 'gato', 'otro'])],
            'propietario' => ['required', 'string', 'max:100'],
            'fecha_nacimiento' => ['required', 'date', 'before_or_equal:today'],
        ], [
            'codigo.required' => 'El código es obligatorio.',
            'codigo.unique' => 'El código ya está registrado.',
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede tener más de 80 caracteres.',
            'especie.required' => 'La especie es obligatoria.',
            'especie.in' => 'La especie seleccionada no es válida.',
            'propietario.required' => 'El propietario es obligatorio.',
            'propietario.max' => 'El propietario no puede tener más de 100 caracteres.',
            'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria.',
            'fecha_nacimiento.date' => 'La fecha de nacimiento no es válida.',
            'fecha_nacimiento.before_or_equal' => 'La fecha de nacimiento no puede ser futura.',
        ]);

        Mascota::create($datos);

        return redirect()->route('mascota.index')
            ->with('success', 'Mascota creada correctamente.');
    }
}
