<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductOrder>
 */
class ProductOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'products_id' => $this->faker->numberBetween(1 ,40),
            'orders_id' => $this->faker->numberBetween(1 ,40),
            'quantity' => $this->faker->numberBetween(1 ,10)
        ];
    }
}
