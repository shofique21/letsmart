<?php

namespace Database\Seeders;

use App\Models\PaymentDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentDetails::factory()->count(10)->create();
    }
}
