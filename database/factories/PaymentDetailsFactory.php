<?php

namespace Database\Factories;

use App\Models\OrderDetails;
use App\Models\PaymentDetails;
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
    protected $model = PaymentDetails::class;
    
    public function definition(): array
    {
        return [
            'order_id' => OrderDetails::factory(),
            'amount' =>fake()->randomDigitNotZero(),
            'provider' =>fake()->randomElements(),
            'status' => 'Cleared',
        ];
    }
}
