<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class AddAnnounceIdToPackages extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('packages', function ($table) {
            $table->integer('trip_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('packages', function ($table) {
            $table->dropColumn('trip_id');
        });
    }
}
