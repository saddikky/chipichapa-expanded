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
        Schema::table('appointment', function (Blueprint $table) {
            $table->dropColumn('status');
        });

        Schema::table('appointment', function (Blueprint $table) {
            // Re-add the column with new enum values
            $table->enum('status', ['Waiting', 'Accepted', 'Denied'])->default('Waiting');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointment', function (Blueprint $table) {
            $table->dropColumn('status');
        });

        Schema::table('appointment', function (Blueprint $table) {
            // Re-add the column with old enum values
            $table->enum('status', ['waiting', 'accepted', 'denied'])->default('waiting');
        });
    }
};
