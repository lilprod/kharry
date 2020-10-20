<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToTripannounces extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('trip_announces', function ($table) {
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('trip_announces', function ($table) {
            $table->dropColumn('user_id');
        });
    }
}
