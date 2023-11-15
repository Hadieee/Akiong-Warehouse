<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kategori>
 */
class KategoriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_kategori' => fake()->unique()->numberBetween(1000, 9999),
            'nama_kategori' => fake()->randomElement([
                'ATK',
                'Pakaian'
            ]),
        ];
    }
}
