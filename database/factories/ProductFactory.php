<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Inventory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'short_description' =>fake()->text(),
            'description' => fake()->paragraph(),
            'SKU' => 'pices',
            'category_id' => Category::factory(),
            'inventory_id' => Inventory::factory(),
            'price' => fake()->randomDigitNotZero(),
            'discount_id' => Discount::factory(),
        ];
    }
}
