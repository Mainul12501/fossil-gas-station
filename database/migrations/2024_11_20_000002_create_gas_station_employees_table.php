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
        Schema::create('gas_station_employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('profile_image')->nullable();
            $table->string('fb')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('x')->nullable();
            $table->string('linkedin')->nullable();
            $table
                ->tinyInteger('status')
                ->default(1)
                ->nullable();
            $table->string('slug')->nullable();
            $table->text('seo_header')->nullable();
            $table->text('seo_footer')->nullable();
            $table->text('overview')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gas_station_employees');
    }
};
