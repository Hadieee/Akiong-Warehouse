<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemasok>
 */
class PemasokFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_pemasok' => fake()->unique()->numberBetween(1000, 9999),
            'nama_pemasok' => fake()->randomElement([
                'Faber Castell',
                'Erigo',
                'Sinar Dunia',
                'H & M'
            ]),
            'no_telepon' => fake()->phoneNumber()

        ];
    }
}
