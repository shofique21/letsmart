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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->unsigned()->index();
            $table->bigInteger('product_id')->unsigned();
            $table->integer('quantity')->nullable()->default(1);
            $table->double('product_price', 8,2)->nullable()->default(0);
            $table->double('tax', 8,2)->nullable()->default(0);
            $table->double('discount', 8,2)->nullable()->default(0);
            $table->string('status')->default(1);
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
