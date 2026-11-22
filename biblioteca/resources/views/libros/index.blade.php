@extends('layouts.app')
@section('contenido')
<a href="{{ route('libros.create') }}">Crear libro</a>

<h1>Libros regiistrados</h1>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Codigo</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Año</th>
        </tr>
    </thead>
    <tbody> 
            
        @forelse ($libros as $libro)
        <tr>
            <td> {{ $libro->id }}</td>
            <td>{{ $libro->codigo }}</td>
            <td>{{ $libro->titulo }}</td>
            <td>{{ $libro->autor }}</td>
            <td>{{ $libro->anio_publicacion }}</td>
        </tr>
        @empty
        <tr>
            <td>No hay libros</td>
        </tr>
            
        @endforelse
    </tbody>
</table>



@endsection