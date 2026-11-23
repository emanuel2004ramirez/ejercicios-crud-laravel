@extends('layouts.app')

@section('contenido')
    <main class="contenedor">
        <div class="barra">
            <h1>Registro de mascotas</h1>
            <a class="salir" href="{{ route('logout') }}">Cerrar sesión</a>
        </div>

        <div class="tabla-contenedor">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Especie</th>
                        <th>Propietario</th>
                        <th>Fecha de nacimiento</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mascotas as $mascota)
                        <tr>
                            <td>{{ $mascota->id }}</td>
                            <td>{{ $mascota->codigo }}</td>
                            <td>{{ $mascota->nombre }}</td>
                            <td class="especie">{{ $mascota->especie }}</td>
                            <td>{{ $mascota->propietario }}</td>
                            <td>{{ $mascota->fecha_nacimiento->format('d/m/Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
