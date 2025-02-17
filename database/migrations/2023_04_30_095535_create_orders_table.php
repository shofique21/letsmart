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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('invoice_id')->nullable();
            $table->decimal('total',8,2)->nullable()->default(0);
            $table->decimal('total_tax',8,2)->nullable()->default(0);
            $table->integer('confirmed')->nullable()->default(0);
            $table->integer('delivered')->nullable()->default(0);
            $table->integer('return')->nullable()->default(0);
            $table->integer('exchange')->nullable()->default(0);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
