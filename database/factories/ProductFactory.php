<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'name' => fake()->words(2, true),
            'price' => fake()->randomFloat(2, 1500, 10000),
            'image' => null,
            'description' => fake()->sentence(),
            'available' => true
        ];
    }
}