<?php

namespace Database\Factories;

use App\Models\Kategori;
use App\Models\Pemasok;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_barang' => $this->faker->unique()->numberBetween(1000, 9999),
            'pemasok_id' => Pemasok::all()->random()->id,
            'kategori_id' => Kategori::all()->random()->id,
            'nama_barang' => $this->faker->randomElement([
                'Buku Tulis Sinar Dunia',
                'Pensil 2B Faber Castell',
                'Baju AOT Erigo',
                'Celana Jeans H & M'
            ]),
            'stok_barang' => $this->faker->numberBetween(1, 100),
        ];
    }
}
