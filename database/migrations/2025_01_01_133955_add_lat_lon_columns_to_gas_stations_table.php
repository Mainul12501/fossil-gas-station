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
        if (!Schema::hasColumns('gas_stations', ['lat', 'lon'])) {
            Schema::table('gas_stations', function (Blueprint $table) {
                $table->string('lat')->nullable()->default(0);
                $table->string('lon')->nullable()->default(0);
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gas_stations', function (Blueprint $table) {
            //
        });
    }
};
