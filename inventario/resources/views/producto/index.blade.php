@extends('layouts.app')
@section('contenido')  
@csrf
 
<h1>Registro de Productos</h1>
<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Existencia</th>
        </tr>   
    </thead>
    <tbody>
        @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->codigo }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->precio }}</td>
                <td>{{ $producto->existencia }}</td>
            </tr>
        @endforeach
</table>
@endsection
