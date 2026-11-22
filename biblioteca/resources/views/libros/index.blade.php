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
            <th>Acciones </th>
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
            <td>
                <a href="{{ route('libros.edit', $libro->id) }}">Editar</a>
                
                <form method="POST" action="{{ route('libros.destroy', $libro->id) }}" style="display:inline"
                onsubmit="return confirm('¿Estás seguro de que deseas eliminar este libro?');">
                    o
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                    
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td>No hay libros</td>
        </tr>
            
        @endforelse
    </tbody>
</table>



@endsection