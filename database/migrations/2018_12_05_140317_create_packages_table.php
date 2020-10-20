<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->float('weight');
            $table->mediumText('content');
            $table->string('sender_name');
            $table->string('sender_email');
            $table->string('sender_phone_number');
            $table->string('recipient_name');
            $table->string('recipient_phone_number');
            $table->string('recipient_email');
            $table->integer('status');
            $table->integer('user_id');
            $table->integer('trip_id');
            $table->string('trip_departure_city');
            $table->string('trip_arrival_city');
            $table->date('trip_departure_date');
            $table->date('trip_arrival_date');
            $table->string('package_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
