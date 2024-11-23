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
        Schema::create('gas_stations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table
                ->unsignedBigInteger('gas_station_id')
                ->default(0)
                ->nullable();
            $table->unsignedBigInteger('key_people_id')->nullable();
            $table->string('name');
            $table->text('overview')->nullable();
            $table->text('sub_images')->nullable();
            $table->text('office_address')->nullable();
            $table->string('office_phone_number')->nullable();
            $table->string('state')->nullable();
            $table->string('state_id')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('fb')->nullable();
            $table->string('insta')->nullable();
            $table->string('telegram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('skype')->nullable();
            $table->string('whatsapp')->nullable();
            $table->text('location_map')->nullable();
            $table
                ->tinyInteger('status')
                ->default(1)
                ->nullable();
            $table->string('slug')->nullable();
            $table->text('seo_header')->nullable();
            $table->text('seo_footer')->nullable();
            $table->string('logo')->nullable();
            $table->string('main_image')->nullable();
            $table->string('office_email_1')->nullable();
            $table->string('office_email_2')->nullable();
            $table->string('office_email_3')->nullable();
            $table->string('office_phone_number_2')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gas_stations');
    }
};
