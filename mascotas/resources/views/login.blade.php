@extends('layouts.app')

@section('contenido')
    <main class="pagina-login">
        <section class="login-card">
            <div class="marca">
                <div class="huella" aria-hidden="true">🐾</div>
                <div>
                    <strong>Control de mascotas</strong>
                    <span>Área administrativa</span>
                </div>
            </div>

            <h1>Bienvenido</h1>
            <p class="subtitulo">Ingrese sus datos para administrar los registros.</p>

            @if ($errors->any())
                <ul class="errores">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form action="{{ route('login.store') }}" method="POST">
                @csrf

                <label for="username">Usuario</label>
                <input id="username" name="username" placeholder="Escriba su usuario" required value="{{ old('username') }}" autofocus>

                <label for="password">Contraseña</label>
                <input id="password" type="password" name="password" placeholder="Escriba su contraseña" required>

                <button type="submit">Iniciar sesión</button>
            </form>
        </section>
    </main>
@endsection
