@extends('layouts.app')

@section('contenido')
<form method="post" action="{{ route('tarea.store') }}">
    @csrf
    <input type="text" name="titulo" placeholder="Título">
    <textarea name="descripcion" placeholder="Descripción"></textarea>
    <input type="text" name="responsable" placeholder="Responsable">
    <select name="estado">
        <option value="pendiente">Pendiente</option>
        <option value="en progreso">En Progreso</option>
        <option value="completada">Completada</option>
    </select>   
    
    <input type="date" name="fecha_limite" placeholder="Fecha límite">
    <button type="submit">Crear Tarea</button>
</

@endsection