@extends('layouts.app')

@section('contenido')
    <main class="formulario-card">
        <h1>Crear mascota</h1>

        @if ($errors->any())
            <ul class="errores">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('mascota.store') }}" method="POST">
            @csrf

            <label for="codigo">Código</label>
            <input id="codigo" name="codigo" value="{{ old('codigo') }}" required>

            <label for="nombre">Nombre</label>
            <input id="nombre" name="nombre" maxlength="80" value="{{ old('nombre') }}" required>

            <label for="especie">Especie</label>
            <select id="especie" name="especie" required>
                <option value="">Seleccione una especie</option>
                <option value="perro" @selected(old('especie') === 'perro')>Perro</option>
                <option value="gato" @selected(old('especie') === 'gato')>Gato</option>
                <option value="otro" @selected(old('especie') === 'otro')>Otro</option>
            </select>

            <label for="propietario">Propietario</label>
            <input id="propietario" name="propietario" maxlength="100" value="{{ old('propietario') }}" required>

            <label for="fecha_nacimiento">Fecha de nacimiento</label>
            <input id="fecha_nacimiento" type="date" name="fecha_nacimiento" max="{{ date('Y-m-d') }}" value="{{ old('fecha_nacimiento') }}" required>

            <button type="submit">Guardar mascota</button>
        </form>

        <a class="regresar" href="{{ route('mascota.index') }}">Regresar al listado</a>
    </main>
@endsection
