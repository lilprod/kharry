<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToReceptionpackages extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('reception_packages', function ($table) {
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('reception_packages', function ($table) {
            $table->dropColumn('user_id');
        });
    }
}
