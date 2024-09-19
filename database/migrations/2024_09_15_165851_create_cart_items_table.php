<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('product_id')->references('id')->on('products')->cascadeOnDelete();
            $table->foreignId('cart_id')->references('id')->on('carts')->cascadeOnDelete();
            $table->unsignedInteger('quantity');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
