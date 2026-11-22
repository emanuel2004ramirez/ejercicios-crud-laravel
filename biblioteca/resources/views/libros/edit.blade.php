@extends('layouts.app')
@section('contenido')
<h1>Editar libro</h1>
<form method="post" action="{{ route('libros.update', $libro->id) }}">
    @csrf
    @method('PUT')
    <label for="codigo">Codigo:</label>
    <input type="text" name="codigo" id="codigo" value="{{ $libro->codigo }}">
    <br>
    <label for="titulo">Titulo:</label>
    <input type="text" name="titulo" id="titulo" value="{{ $libro->titulo }}">
    <br>
    <label for="autor">Autor:</label>
    <input type="text" name="autor" id="autor" value="{{ $libro->autor }}">
    <br>
    <label for="anio_publicacion">Año de publicación:</label>
    <input type="number" name="anio_publicacion" id="anio_publicacion" value="{{ $libro->anio_publicacion }}">
    <br>
    <button type="submit">Actualizar</button>
</form>
@endsection