<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $path = storage_path('\sql\ostan.sql');

        // Check if the file exists
        if (file_exists($path)) {
            // Execute the SQL query
            DB::unprepared(file_get_contents($path));
            $path = storage_path('\sql\shahr.sql');

            // Check if the file exists
            if (file_exists($path)) {
                // Execute the SQL query
                DB::unprepared(file_get_contents($path));
            } else {
                // Handle file not found
                echo "SQL file not found: $path";
            }
        } else {
            // Handle file not found
            echo "SQL file not found: $path";
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ostan');
        Schema::dropIfExists('shahr');
    }
};
