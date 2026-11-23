@extends('layouts.app')
@section('contenido')
<form action="{{ route('producto.store') }}" method="POST">
    @csrf
    <input type="text" name="codigo" placeholder="Código" required>
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="number" name="precio" placeholder="Precio" required>
    <input type="number" name="existencia" placeholder="Existencia" required>
    <button type="submit">Guardar</button>
@endsection