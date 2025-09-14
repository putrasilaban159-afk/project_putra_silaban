<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true),             // ex: "Kopi Arabika"
            'price' => $this->faker->numberBetween(10000,200000),// ex: 150000
            'description' => $this->faker->sentence(10),
        ];
    }
}
