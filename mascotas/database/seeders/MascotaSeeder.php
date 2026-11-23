<?php

namespace Database\Seeders;

use App\Models\Mascota;
use Illuminate\Database\Seeder;

class MascotaSeeder extends Seeder
{
    public function run(): void
    {
        Mascota::factory()->count(10)->create();
    }
}
