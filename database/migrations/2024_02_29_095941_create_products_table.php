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
            $table->string('name');
            $table->decimal('selling_price');
            $table->decimal('offer_price')->nullable();
            $table->integer('discount')->nullable();
            $table->string('sku')->nullable();
            $table->integer('stock')->nullable();
            $table->string('brands', 255)->nullable();
            $table->string('colors', 255)->nullable();
            $table->string('sizes', 255)->nullable();
            $table->foreignId('product_category_id')->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products',);
    }
};
