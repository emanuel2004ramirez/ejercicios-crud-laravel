@extends('layouts.app')

@section('contenido')
    <h1>Crear estudiante</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('estudiante.store') }}" method="POST">
        @csrf

        <label for="numero_cuenta">Número de cuenta</label>
        <input id="numero_cuenta" name="numero_cuenta" value="{{ old('numero_cuenta') }}" required>

        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" maxlength="100" value="{{ old('nombre') }}" required>

        <label for="correo">Correo</label>
        <input id="correo" type="email" name="correo" value="{{ old('correo') }}" required>

        <label for="fecha_nacimiento">Fecha de nacimiento</label>
        <input id="fecha_nacimiento" type="date" name="fecha_nacimiento" max="{{ date('Y-m-d') }}" value="{{ old('fecha_nacimiento') }}" required>

        <button type="submit">Guardar</button>
    </form>

    <a href="{{ route('estudiante.index') }}">Regresar</a>
@endsection
