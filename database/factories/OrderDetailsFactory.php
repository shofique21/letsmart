<?php

namespace Database\Factories;

use App\Models\OrderDetails;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetails>
 */
class OrderDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = OrderDetails::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'total' => 10,
            'payment_id' => Payment::factory(),
        ];
    }
}
