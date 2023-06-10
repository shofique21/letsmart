<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity')->default(1);
            $table->double('buy_price',8,2)->nullable()->default(0);
            $table->double('sale_price',8,2)->nullable()->default(0);
            $table->integer('total_stock')->nullable()->default(0);
            $table->integer('total_sold')->nullable()->default(0);
            $table->integer('stock_out')->nullable()->default(0);
            $table->double('buy_accounts',8,2)->nullable()->default(0);
            $table->double('sold_accounts',8,2)->nullable()->default(0);
            $table->double('discount_accounts',8,2)->nullable()->default(0);
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
