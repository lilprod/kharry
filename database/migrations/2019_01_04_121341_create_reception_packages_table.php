<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceptionPackagesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reception_packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('recipient_name');
            $table->string('recipient_phone_number');
            $table->string('recipient_email');
            $table->string('package_id');
            $table->string('package_code');
            $table->integer('sender_id');
            $table->string('sender_name');
            $table->string('sender_email');
            $table->string('sender_phone_number');
            $table->integer('deliveryman_id');
            $table->string('deliveryman_name');
            $table->string('deliveryman_email');
            $table->string('deliveryman_phone_number');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('reception_packages');
    }
}
