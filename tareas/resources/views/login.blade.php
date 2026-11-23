@extends('layouts.app')
@section('contenido')
<form method="post" action="{{ route('login') }}">
    @csrf
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>

</form>

@endsection