<h1>Registro de Tareas</h1>
@if ( session('success') )
    <p>{{ session('success') }}</p>  

    
@endif
<a href="{{ route('tarea.create') }}">Crear Nueva Tarea</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Responsable</th>
            <th>Estado</th>
            <th>Fecha Límite</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tareas as $tarea)
            <tr>
                <td>{{ $tarea->id }}</td>
                <td>{{ $tarea->titulo }}</td>
                <td>{{ $tarea->descripcion }}</td>
                <td>{{ $tarea->responsable }}</td>
                <td>{{ $tarea->estado }}</td>
                <td>{{ $tarea->fecha_limite }}</td>
                <td>
                    <a href="{{ route('tarea.edit', $tarea->id) }}">Editar</a>
                    <form method="post" action="{{ route('tarea.destroy', $tarea->id) }}" style="display:inline;" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta tarea?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>