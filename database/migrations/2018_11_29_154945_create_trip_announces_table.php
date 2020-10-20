<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripAnnouncesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('trip_announces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('departure_city');
            $table->string('arrival_city');
            $table->date('departure_date');
            $table->date('arrival_date');
            $table->integer('number_kilo');
            $table->integer('price_kilo');
            $table->string('currency');
            $table->string('transport');
            $table->string('paypal_info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('trip_announces');
    }
}
