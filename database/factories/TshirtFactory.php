<?php

namespace Database\Factories;

use App\Models\Color;
use App\Models\Tshirt;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Tshirt>
 */
class TshirtFactory extends Factory
{
    protected $model = Tshirt::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'SKU' => $this->faker->unique()->regexify('[A-Z]{3}[0-9]{3}'),
            'name' => $this->faker->word(),
            'color' => Color::inRandomOrder()->first()->slug,
            'stock' => $this->faker->randomElement(['in_stock', 'out_of_stock']),
            'stamp' => $this->faker->boolean(),
        ];
    }
}
