<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\producto>
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
               'nombre'  => fake()->word(),
               'descripcion'  => fake()->text(),
                'precio'=>  fake()->numberbetween(100000,500000),
               'stock'=>fake()->numberbetween(1, 100),
        ];
    }
}
