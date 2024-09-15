<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'amount' => $this->faker->randomFloat(2, 10, 500),
            'status' => $this->faker->randomElement(['pending', 'completed', 'failed']),
            'payment_method' => $this->faker->randomElement(['credit_card', 'paypal', 'bank_transfer']),
        ];
    }
}
