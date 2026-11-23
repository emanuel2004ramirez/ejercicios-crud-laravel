@extends('layouts.app')

@section('contenido')
    <main class="formulario-card">
        <h1>Editar mascota</h1>

        @if ($errors->any())
            <ul class="errores">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('mascota.update', $mascota) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="codigo">Código</label>
            <input id="codigo" name="codigo" value="{{ old('codigo', $mascota->codigo) }}" required>

            <label for="nombre">Nombre</label>
            <input id="nombre" name="nombre" maxlength="80" value="{{ old('nombre', $mascota->nombre) }}" required>

            <label for="especie">Especie</label>
            <select id="especie" name="especie" required>
                <option value="">Seleccione una especie</option>
                <option value="perro" @selected(old('especie', $mascota->especie) === 'perro')>Perro</option>
                <option value="gato" @selected(old('especie', $mascota->especie) === 'gato')>Gato</option>
                <option value="otro" @selected(old('especie', $mascota->especie) === 'otro')>Otro</option>
            </select>

            <label for="propietario">Propietario</label>
            <input id="propietario" name="propietario" maxlength="100" value="{{ old('propietario', $mascota->propietario) }}" required>

            <label for="fecha_nacimiento">Fecha de nacimiento</label>
            <input id="fecha_nacimiento" type="date" name="fecha_nacimiento" max="{{ date('Y-m-d') }}" value="{{ old('fecha_nacimiento', $mascota->fecha_nacimiento->format('Y-m-d')) }}" required>

            <button type="submit">Actualizar mascota</button>
        </form>

        <a class="regresar" href="{{ route('mascota.index') }}">Regresar al listado</a>
    </main>
@endsection
