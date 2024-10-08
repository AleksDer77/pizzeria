<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->string('description');
            $table->decimal('price');
            $table->boolean('available')->default(true);
            $table->foreignId('category_id')->references('id')->on('categories');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
