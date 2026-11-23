@extends('layouts.app')

@section('contenido')
    <h1>Editar estudiante</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('estudiante.update', $estudiante) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="numero_cuenta">Número de cuenta</label>
        <input id="numero_cuenta" name="numero_cuenta" value="{{ old('numero_cuenta', $estudiante->numero_cuenta) }}" required>

        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" maxlength="100" value="{{ old('nombre', $estudiante->nombre) }}" required>

        <label for="correo">Correo</label>
        <input id="correo" type="email" name="correo" value="{{ old('correo', $estudiante->correo) }}" required>

        <label for="fecha_nacimiento">Fecha de nacimiento</label>
        <input id="fecha_nacimiento" type="date" name="fecha_nacimiento" max="{{ date('Y-m-d') }}" value="{{ old('fecha_nacimiento', $estudiante->fecha_nacimiento->format('Y-m-d')) }}" required>

        <button type="submit">Actualizar</button>
    </form>

    <a href="{{ route('estudiante.index') }}">Regresar</a>
@endsection
