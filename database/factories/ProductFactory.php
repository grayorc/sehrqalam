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
            'title' => fake()->title(),
            'slug' => fake()->slug,
            'detail' => fake()->text(50),
            'user_id' => 1,
            'Price' => mt_rand(10000,100000),
            'category_id' => 1
        ];
    }
}
