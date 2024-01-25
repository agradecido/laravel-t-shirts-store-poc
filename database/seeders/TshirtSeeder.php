<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TshirtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tshirts = [
            [
                'SKU' => 'TSHIRT100COTTON',
                'name' => 'T-Shirt 100% cotton Stamped',
                'color' => 'red',
                'stamp' => true,
                'stock' => 'in_stock',
            ],
            [
                'SKU' => 'TSHIRT100POLYESTER',
                'name' => 'T-Shirt 100% polyester',
                'color' => 'green',
                'stamp' => false,
                'stock' => 'in_stock',
            ],
            [
                'SKU' => 'TSHIRT50POLYESTER50COTTON',
                'name' => 'T-Shirt 50% polyester 50% cotton',
                'color' => 'blue',
                'stamp' => false,
                'stock' => 'out_of_stock',
            ],

        ];

        foreach ($tshirts as $tshirt) {
            \App\Models\Tshirt::create($tshirt);
        }
    }
}
