<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call(UserTableSeeder::class);
        // $this->call(UserAddressTableSeeder::class);
        // $this->call(PaymentTableSeeder::class);
        // $this->call(CategoryTableSeeder::class);
        // $this->call(SubcategoryTableSeeder::class);
        // $this->call(InventoryTableSeeder::class);
        // $this->call(DiscountTableSeeder::class);
        // $this->call(ProductTableSeeder::class);
        // $this->call(CartItemTableSeeder::class);
        // $this->call(ShoppingSessionTableSeeder::class);
        //$this->call(OrderTableSeeder::class);
        //$this->call(OrderItemTableSeeder::class);
        $this->call(PaymentDetailsTableSeeder::class);
       
         
       // $this->call(AdminUserTableSeeder::class);
    }
}
