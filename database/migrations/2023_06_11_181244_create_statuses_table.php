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
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable()->default('active');
            $table->string('pending')->nullable()->default('pending');
            $table->string('confirmed')->nullable()->default('confirmed');
            $table->string('delivered')->nullable()->default('delivered');
            $table->string('return')->nullable()->default('return');
            $table->string('exchange')->nullable()->default('exchange');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statuses');
    }
};
