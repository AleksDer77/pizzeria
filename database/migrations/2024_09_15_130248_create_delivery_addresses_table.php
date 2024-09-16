<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('delivery_addresses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('city');
            $table->string('street');
            $table->unsignedMediumInteger('house_number');
            $table->unsignedMediumInteger('apartment');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('delivery_addresses');
    }
};
