@extends('layouts.app')
@section('contenido')  
@csrf

@if (session('success'))    
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
 <a href="{{ route('producto.create') }}">Agregar Producto</a>
<h1>Registro de Productos</h1>
<table border="1">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Existencia</th>
            <th>Acciones</th>
        </tr>   
    </thead>
    <tbody>
        @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->codigo }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ number_format($producto->precio, 2) }}</td>
                <td>{{ $producto->existencia == 0 ? 'Agotado' : $producto->existencia }}</td>
                <td>
                    <a href="{{ route('producto.edit', $producto->id) }}">Editar</a>
                    <form action="{{ route('producto.destroy', $producto->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar</button>    
                    </form>
                    
                    
            </tr>
        @endforeach
</table>
@endsection
