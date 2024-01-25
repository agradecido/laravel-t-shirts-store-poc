<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            [
                'slug' => 'red',
                'name' => 'Red',
                'RGB' => 'FF0000',
            ],
            [
                'slug' => 'green',
                'name' => 'Green',
                'RGB' => '00FF00',
            ],
            [
                'slug' => 'blue',
                'name' => 'Blue',
                'RGB' => '0000FF',
            ],
            [
                'slug' => 'black',
                'name' => 'Black',
                'RGB' => '000000',
            ],
            [
                'slug' => 'white',
                'name' => 'White',
                'RGB' => 'FFFFFF',
            ],
        ];

        foreach ($colors as $color) {
            \App\Models\Color::create($color);
        }
    }
}
