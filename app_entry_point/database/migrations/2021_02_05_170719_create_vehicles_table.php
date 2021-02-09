<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id("v_id")->unsigned();
            $table->string('primary_owner', 255)->nullable()->comment('name of the original owner of vehicle');
            $table->string('sold_to', 255)->nullable()->comment('name of the current owner of the vehicle, after been sold by the original owner ');
            $table->year("year_purchased")->comment('the exact year the vehicle was purchased');
            $table->year("year_sold")->comment('if you have sold it');
            $table->year("model_year")->comment('what year was the vehicle\'s model');
            $table->string("type", 255)->comment('vehicle type');
            $table->string("make", 255);
            $table->string("model", 255);
            $table->decimal("engine_displacement", 18, 2)->comment('fuel consumption rate in litre');
            $table->string('engine_type', 100)->nullable();
            $table->string('induction_type', 255)->nullable();
            $table->string('transmission_type', 255)->nullable();
            $table->string('drive_type', 255)->nullable();
            $table->string('make_country', 255)->nullable()->comment('where the car was designed');
            $table->string('primary_color', 225)->nullable();
            $table->string('vehicle_location', 255)->nullable();
            $table->string('purpose', 255)->nullable()->comment('what do you use the vehicle for');
            $table->string('VIN', 255)->nullable()->comment('Vehicle identification number, helpful for finding your cars in the future');
            $table->string('summary_of_modification', 255)->nullable()->comment('keep track of any repairs of fixes made');
            $table->text('external_image_link')->nullable();
            $table->json('uploaded_image_link')->nullable();
            $table->json('uploaded_image_link_2')->default(new Expression('(JSON_ARRAY())'));
            $table->string('status', 100)->nullable()->comment('current state of vehicle -- sold, in-use, undergoing-repairs');
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
        Schema::dropIfExists('vehicles');
    }
}
