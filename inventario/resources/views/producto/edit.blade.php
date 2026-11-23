@extends('layouts.app')

@section('contenido')
<form action="{{ route('producto.update', $producto->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="codigo" placeholder="Código" value="{{ $producto->codigo }}" required>
    <input type="text" name="nombre" placeholder="Nombre" value="{{ $producto->nombre }}" required>
    <input type="number" name="precio" placeholder="Precio" value="{{ $producto->precio }}" required>
    <input type="number" name="existencia" placeholder="Existencia" value="{{ $producto->existencia }}" required>
    <button type="submit">Actualizar</button>

@endsection