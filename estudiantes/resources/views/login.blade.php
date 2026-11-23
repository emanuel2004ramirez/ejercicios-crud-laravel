@extends('layouts.app')

@section('contenido')
    <h1>Iniciar sesión</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('login.store') }}" method="POST">
        @csrf
        <input name="username" placeholder="Usuario" required value="{{ old('username') }}">
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Iniciar sesión</button>
    </form>
@endsection
