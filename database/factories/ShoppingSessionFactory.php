<?php

namespace Database\Factories;

use App\Models\ShoppingSession;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShoppingSession>
 */
class ShoppingSessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ShoppingSession::class;
    
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'total' => 10,
        ];
    }
}
