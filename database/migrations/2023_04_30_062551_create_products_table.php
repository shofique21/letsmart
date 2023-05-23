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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->string('SKU')->nullable();
            $table->string('unit')->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('subcategory_id')->unsigned()->nullable();
            $table->bigInteger('brand_id')->unsigned()->nullable()->default(1);
            $table->text('color')->nullable();
            $table->string('size')->nullable();
            $table->bigInteger('inventory_id')->unsigned();
            $table->bigInteger('discount_id')->unsigned()->nullable();
            $table->boolean('is_new')->nullable()->default(0);
            $table->integebooleanr('is_feature')->nullable()->default(0);
            $table->boolean('is_offer')->nullable()->default(0);
            $table->boolean('status')->nullable()->default(0);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('inventory_id')->references('id')->on('inventories')->onDelete('cascade');
            $table->foreign('discount_id')->references('id')->on('discounts')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::drop('products');
        Schema::enableForeignKeyConstraints();
    }
};
