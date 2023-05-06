<?php

namespace Database\Factories;

use App\Models\OrderDetails;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = OrderItem::class;

    public function definition(): array
    {
        return [
            'order_id' => OrderDetails::factory(),
            'product_id' => Product::factory(),
            'quantity' => 2,
        ];
    }
}