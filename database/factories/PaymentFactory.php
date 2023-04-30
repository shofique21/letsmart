<?php

namespace Database\Factories;

use App\Models\Payment;
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
    protected $model = Payment::class;
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create()->id ,
            'payment_type' => fake()->creditCardType(),
            'provider' => fake()->title(),
            'account_no' => fake()->creditCardNumber(),
            'expiry' => fake()->creditCardExpirationDate(),
        ];
    }
}
