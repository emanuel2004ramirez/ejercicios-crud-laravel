<h1>Registro de Tareas</h1>
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
            </tr>
        @endforeach
    </tbody>