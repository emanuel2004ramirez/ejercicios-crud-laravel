<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();

        return view('estudiante.index', compact('estudiantes'));
    }

    public function create()
    {
        return view('estudiante.create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'numero_cuenta' => ['required', 'string', 'unique:estudiantes,numero_cuenta'],
            'nombre' => ['required', 'string', 'max:100'],
            'correo' => ['required', 'email', 'unique:estudiantes,correo'],
            'fecha_nacimiento' => ['required', 'date', 'before_or_equal:today'],
        ], [
            'numero_cuenta.required' => 'El número de cuenta es obligatorio.',
            'numero_cuenta.unique' => 'El número de cuenta ya está registrado.',
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede tener más de 100 caracteres.',
            'correo.required' => 'El correo es obligatorio.',
            'correo.email' => 'El correo no es válido.',
            'correo.unique' => 'El correo ya está registrado.',
            'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria.',
            'fecha_nacimiento.date' => 'La fecha de nacimiento no es válida.',
            'fecha_nacimiento.before_or_equal' => 'La fecha de nacimiento no puede ser futura.',
        ]);

        Estudiante::create($datos);

        return redirect()->route('estudiante.index')
            ->with('success', 'Estudiante creado correctamente.');
    }

    public function edit(Estudiante $estudiante)
    {
        return view('estudiante.edit', compact('estudiante'));
    }

    public function update(Request $request, Estudiante $estudiante)
    {
        $datos = $request->validate([
            'numero_cuenta' => [
                'required',
                'string',
                Rule::unique('estudiantes', 'numero_cuenta')->ignore($estudiante->id),
            ],
            'nombre' => ['required', 'string', 'max:100'],
            'correo' => [
                'required',
                'email',
                Rule::unique('estudiantes', 'correo')->ignore($estudiante->id),
            ],
            'fecha_nacimiento' => ['required', 'date', 'before_or_equal:today'],
        ], [
            'numero_cuenta.required' => 'El número de cuenta es obligatorio.',
            'numero_cuenta.unique' => 'El número de cuenta pertenece a otro estudiante.',
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede tener más de 100 caracteres.',
            'correo.required' => 'El correo es obligatorio.',
            'correo.email' => 'El correo no es válido.',
            'correo.unique' => 'El correo pertenece a otro estudiante.',
            'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria.',
            'fecha_nacimiento.date' => 'La fecha de nacimiento no es válida.',
            'fecha_nacimiento.before_or_equal' => 'La fecha de nacimiento no puede ser futura.',
        ]);

        $estudiante->update($datos);

        return redirect()->route('estudiante.index')
            ->with('success', 'Estudiante actualizado correctamente.');
    }
}
