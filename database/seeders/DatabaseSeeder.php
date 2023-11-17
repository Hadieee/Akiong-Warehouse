<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Barang;
use App\Models\Pemasok;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Kategori::factory(2)->create();
        Pemasok::factory(4)->create();
        Barang::factory(5)->create();

        User::create([
            'name' => 'Muhammad Firdaus',
            'username' => 'Firdaus1223',
            'password' => Hash::make('123'),
            'role' => 'manager'
        ]);
    }
}
