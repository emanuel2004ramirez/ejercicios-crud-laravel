@extends('layouts.app')

@section('contenido')
    <h1>Registro de estudiantes</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('estudiante.create') }}">Agregar estudiante</a>

    <table border="1">
        <thead>
            <tr>
                <th>Número de cuenta</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Fecha de nacimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
                <tr>
                    <td>{{ $estudiante->numero_cuenta }}</td>
                    <td>{{ $estudiante->nombre }}</td>
                    <td>{{ $estudiante->correo }}</td>
                    <td>{{ $estudiante->fecha_nacimiento->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('estudiante.edit', $estudiante) }}">Editar</a>
                        <form action="{{ route('estudiante.destroy', $estudiante) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Está seguro de eliminar este estudiante?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
