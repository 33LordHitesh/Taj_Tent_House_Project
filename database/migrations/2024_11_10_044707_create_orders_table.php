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
            $table->id(); // Primary key
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // References users table
            $table->decimal('total_amount', 10, 2); // Total amount for the order
            $table->string('status')->default('pending'); // Order status (e.g., "pending", "confirmed", "cancelled")
            $table->date('event_date'); // Date of the event for which materials are booked
            $table->text('address'); // Address for delivery/setup
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
