<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispatchRiderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispatch_riders', function (Blueprint $table) {
            $table->id("rider_id")->unsigned();
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->string('mobile_number', 15)->unique();
            // $table->integer('rating', 10)->nullable();
            $table->string('first_name', 255)->unique();
            $table->string('last_name', 255)->unique();
            $table->string('middle_name', 255)->nullable();
            $table->timestampTz('start_of_working_hour')->nullable();
            $table->timestampTz('end_of_working_hour')->nullable();
            $table->text('address_1')->nullable();
            $table->text('address_2')->nullable();
            $table->text('rider_photo_url')->nullable();
            $table->text('license_img_url')->nullable();
            $table->date('birth_year')->nullable();;
            $table->timestampTz('joined_on')->nullable();
            $table->timestampTz('last_updated')->nullable();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dispatch_riders');
    }
}
