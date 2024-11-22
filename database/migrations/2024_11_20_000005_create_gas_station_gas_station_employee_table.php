<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gas_station_gas_station_employee', function (
            Blueprint $table
        ) {
            $table->unsignedBigInteger('gas_station_id');
            $table->unsignedBigInteger('gas_station_employee_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gas_station_gas_station_employee');
    }
};
