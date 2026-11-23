@extends('layouts.app')

@section('contenido')

actualizar
<form method="post" action="{{ route('tarea.update', $tarea->id) }}">
    @csrf
    @method('PUT')
    <input type="text" name="titulo" value="{{ $tarea->titulo }}" placeholder="Título">
    <textarea name="descripcion" placeholder="Descripción">{{ $tarea->descripcion }}</textarea>
    <input type="text" name="responsable" value="{{ $tarea->responsable }}" placeholder="Responsable">
    <select name="estado">
        <option value="pendiente" {{ $tarea->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
        <option value="en progreso" {{ $tarea->estado == 'en progreso' ? 'selected' : '' }}>En Progreso</option>
        <option value="completada" {{ $tarea->estado == 'completada' ? 'selected' : '' }}>Completada</option>
    </select>   

    <input type="date" name="fecha_limite" value="{{ $tarea->fecha_limite }}" placeholder="Fecha límite">
    <button type="submit">Actualizar Tarea</button>
</form>


@endsection