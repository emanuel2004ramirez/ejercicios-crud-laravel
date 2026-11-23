<?php

namespace Database\Factories;

use App\Models\tarea;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<tarea>
 */
class TareaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'titulo' => $this->faker->sentence,
            'descripcion' => $this->faker->paragraph,
            'responsable' => $this->faker->name,
            'estado' => $this->faker->randomElement(['pendiente', 'en progreso', 'completada']),
            'fecha_limite' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
        ];
    }
}
