@extends('layouts.app')
@section('contenido')

<form method="post" action="{{ route('libros.store') }}">  
    @csrf
    <label >Codigo</label>
    <input type="text" name="codigo">
    <label for="titulo">Titulo:</label>
    <input type="text" name="titulo" id="titulo">
    <label for="autor">Autor:</label>
    <input type="text" name="autor" id="autor">
    <br>

    <label for="anio_publicacion">Año de publicación:</label>
    <input type="number" name="anio_publicacion" id="anio_publicacion">
    <br>

    <button type="submit">Guardar</button>
</form>

@endsection

