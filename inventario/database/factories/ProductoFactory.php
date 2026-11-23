<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends Factory<Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //Inventar 10 campos
            'codigo' => $this->faker->unique()->numerify('P###'),
            'nombre' => $this->faker->word(),
            'precio' => $this->faker->numberBetween(100, 1000),
            'existencia' => $this->faker->numberBetween(1, 100),

        ];
    }
}
