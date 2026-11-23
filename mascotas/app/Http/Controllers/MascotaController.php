<?php

namespace App\Http\Controllers;

use App\Models\Mascota;

class MascotaController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::all();

        return view('mascota.index', compact('mascotas'));
    }
}
