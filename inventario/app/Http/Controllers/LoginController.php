<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;    
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //Create
    public function create()
    {
        return view('login');
    }   

    //Store
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        //Confirmar si las credenciales son correctas
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('producto.index');  
    }

        return redirect('login')->withErrors(['username' => 'Las credenciales no son correctas.'])  ->withInput([
            'username' => $request->input('username'),
        ]);
    }

    //Destroy
    public function destroy(Request $request)
    {
        auth::logout(); 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
       
    }      

}
