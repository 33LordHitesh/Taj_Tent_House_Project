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
        Schema::table('materials', function (Blueprint $table) {
            if (!Schema::hasColumn('materials', 'Cat')) {
                $table->string('Cat', 50)->nullable(); // Add 'Cat' if it doesn't exist
            }

            if (!Schema::hasColumn('materials', 'Cat_code')) {
                $table->integer('Cat_code')->nullable(); // Add 'Cat_code' if it doesn't exist
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('materials', function (Blueprint $table) {
            $table->dropColumn(['Cat', 'Cat_code']); // Remove the columns if rolled back
        });
    }
};
