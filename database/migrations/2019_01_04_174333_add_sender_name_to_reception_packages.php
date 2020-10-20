<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class AddSenderNameToReceptionPackages extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('reception_packages', function ($table) {
            $table->string('sender_name');
            $table->string('sender_email');
            $table->string('sender_phone_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('reception_packages', function ($table) {
            $table->dropColumn('sender_name');
            $table->dropColumn('sender_email');
            $table->dropColumn('sender_phone_number');
        });
    }
}
