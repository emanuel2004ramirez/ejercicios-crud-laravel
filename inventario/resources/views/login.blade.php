@extends('layouts.app')

@section('contenido')
    <h1>Iniciar sesión</h1>
    <form action="{{ route('login.store') }}" method="POST">
        @csrf
        <input  name="username" placeholder="Username" required value="{{ old('username') }}">
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Iniciar sesión</button>
    </form>
@endsection