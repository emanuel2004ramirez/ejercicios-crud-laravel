<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }   

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // Intentar autenticar al usuario
        if (auth::attempt($credentials)) {
            // Autenticación exitosa, redirigir a la página deseada
            return redirect()->route('tarea.index');
        }

        // Autenticación fallida, redirigir de nuevo al formulario de login con un mensaje de error
        return back()->withErrors([
            'username' => 'Las credenciales proporcionadas no son correctas.',
        ]);
    }       

    public function destroy(Request $request)
    {
        auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }   
}
