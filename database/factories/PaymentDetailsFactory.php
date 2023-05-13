<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentDetails>
 */
class PaymentDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Order::class;
    
    public function definition(): array
    {
        return [
            'order_id' => Order::factory(),
            'payment_id' => 1,
            'amount' =>fake()->randomDigitNotZero(),
            'provider' =>fake()->randomElements(),
            'status' => 'Cleared',
        ];
    }
}
