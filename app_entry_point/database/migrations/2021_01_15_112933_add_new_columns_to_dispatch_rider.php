<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToDispatchRider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dispatch_riders', function (Blueprint $table) {

            $table->bigInteger('created_by')->unsigned();
            $table->foreignId('created_by')->after('rider_id')->constrained("users")->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dispatch_riders', function (Blueprint $table) {
            $table->dropColumn('created_by');
        });
    }
}
