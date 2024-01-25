<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ColorSeeder::class);

        // Si tuviésemos más seeders podríamos hacer esto:
        // $this->call([
        //  ColorSeeder::class,
        //  // Aquí otros seeders,
        // ]);
    }
}
