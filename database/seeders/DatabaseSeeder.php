<?php

namespace Database\Seeders;

use Database\Factories\TshirtFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ColorSeeder::class,
            TshirtSeeder::class,
        ]);
        (new TshirtFactory)->count(20)->create();
    }
}
