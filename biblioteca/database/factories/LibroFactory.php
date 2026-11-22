<?php

namespace Database\Factories;

use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //Generar datos de prueba
            'codigo' => fake()->unique()->bothify('LIB-####'),
            'titulo' => fake()->sentence(3),
            'autor' => fake()->name(),
            'anio_publicacion' => fake()->numberBetween(1450,date('Y')),

        ];
    }
}
