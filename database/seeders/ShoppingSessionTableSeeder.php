<?php

namespace Database\Seeders;

use App\Models\ShoppingSession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShoppingSessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ShoppingSession::factory()->count(10)->create();
    }
}
