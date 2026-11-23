<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioDemo extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //usario admin
        User::updateOrCreate([
            'username' => 'admin',
            'password' => Hash::make('12345678'),
        ]);


    }
}
