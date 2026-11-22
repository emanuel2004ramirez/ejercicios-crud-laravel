<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //Metodo para mostrar el login
    public function create(){
        if(Auth::check()){
            return redirect()->route('libros.index');
        }
        return view('auth.login');
    }

    //Metodo para loguear
    public function store(Request $request){
        $datos = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if(Auth::attempt($datos)){
            $request->session()->regenerate();
        

        return redirect()->intended(route('libros.index'));
        }
        
    
    return back()->withErrors(['username' => 'Usuario o clave incorrecta',])->onlyInput('username');
}

public function destroy(Request $request){
    Auth::logout();
     $request->session()->invalidate();
     $request->session()->regenerateToken();

     return redirect()->route('login');
}
}