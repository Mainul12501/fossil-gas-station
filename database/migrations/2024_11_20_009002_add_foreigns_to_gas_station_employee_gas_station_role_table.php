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
        Schema::table('gas_station_employee_gas_station_role', function (
            Blueprint $table
        ) {
            $table
                ->foreign('gas_station_role_id', 'foreign_alias_0000001')
                ->references('id')
                ->on('gas_station_employee_roles')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('gas_station_employee_id', 'foreign_alias_0000002')
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
        Schema::table('gas_station_employee_gas_station_role', function (
            Blueprint $table
        ) {
            $table->dropForeign(['gas_station_role_id']);
            $table->dropForeign(['gas_station_employee_id']);
        });
    }
};
