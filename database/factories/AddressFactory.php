<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Address::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create()->id ,
            'address_line1' => fake()->address(),
            'address_line2' => fake()->streetAddress(),
            'city' => fake()->city(),
            'postalCode' => fake()->postcode(),
            'country' => fake()->country(),
            'mobile' => fake()->phoneNumber(),
        ];
    }
}
