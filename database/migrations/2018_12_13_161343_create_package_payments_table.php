<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('package_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('payer_name');
            $table->string('payer_email');
            $table->string('payer_phone_number');
            $table->string('receiver_name');
            $table->string('receiver_email');
            $table->string('receiver_phone_number');
            $table->float('amount');
            $table->integer('user_id');
            $table->integer('trip_id');
            $table->integer('package_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('package_payments');
    }
}
