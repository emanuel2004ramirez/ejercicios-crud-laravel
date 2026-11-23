<?php

namespace Database\Factories;

use App\Models\Mascota;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Mascota>
 */
class MascotaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'codigo' => $this->faker->unique()->bothify('M-####'),
            'nombre' => $this->faker->firstName(),
            'especie' => $this->faker->randomElement(['perro', 'gato', 'otro']),
            'propietario' => $this->faker->name(),
            'fecha_nacimiento' => $this->faker->dateTimeBetween('-15 years', 'now')->format('Y-m-d'),
        ];
    }
}
