<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->realTextBetween(10, 20),
            'price' => $this->faker->numberBetween(2000, 10000),
            'stock_min' => $this->faker->numberBetween(1, 10),
            'description' => $this->faker->realTextBetween(50, 100),
            'categories_id' => Category::all(['id'])->random(),
            // 'categories_id' => $this->faker->numberBetween(1, 3),

        ];
    }
}
