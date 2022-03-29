<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'status' => $this->faker->randomElement(['enviado','espera','proceso','despachado','confirmado']) ,
            'place' => $this->faker->randomElement(['domicilio','local']),
            'users_id' => User::all(['id'])->random(),
            // 'users_id' => $this->faker->numberBetween(1 ,10)

        ];
    }
}
