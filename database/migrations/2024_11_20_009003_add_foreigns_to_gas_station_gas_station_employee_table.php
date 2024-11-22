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
        Schema::table('gas_station_gas_station_employee', function (
            Blueprint $table
        ) {
            $table
                ->foreign('gas_station_id')
                ->references('id')
                ->on('gas_stations')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('gas_station_employee_id')
                ->references('id')
                ->on('gas_station_employees')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gas_station_gas_station_employee', function (
            Blueprint $table
        ) {
            $table->dropForeign(['gas_station_id']);
            $table->dropForeign(['gas_station_employee_id']);
        });
    }
};
