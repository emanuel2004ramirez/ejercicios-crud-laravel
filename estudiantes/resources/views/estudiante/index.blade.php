@extends('layouts.app')

@section('contenido')
    <h1>Registro de estudiantes</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Número de cuenta</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Fecha de nacimiento</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
                <tr>
                    <td>{{ $estudiante->numero_cuenta }}</td>
                    <td>{{ $estudiante->nombre }}</td>
                    <td>{{ $estudiante->correo }}</td>
                    <td>{{ $estudiante->fecha_nacimiento->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
