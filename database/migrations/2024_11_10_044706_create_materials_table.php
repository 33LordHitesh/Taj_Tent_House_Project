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
        Schema::create('materials', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Material name, e.g., "Tent", "Chair"
            $table->text('description')->nullable(); // Optional description
            $table->decimal('price', 8, 2); // Price per unit
            $table->integer('stock')->default(0); // Quantity in stock
            $table->string('image_url')->nullable(); // URL for material image
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
