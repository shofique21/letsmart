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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('order_id')->unsigned()->unique();
            $table->string('payment_type')->nullable();
            $table->double('amount',8,2)->nullable();
            $table->string('provider')->nullable();
            $table->bigInteger('account_no')->nullable();
            $table->date('expiry')->nullable();
            $table->integer('status')->nullable()->default(1);
            $table->timestamps();
           // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           // $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
