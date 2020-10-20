<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class AddUsernameToDiscussions extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('discussions', function ($table) {
            $table->string('username');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('discussions', function ($table) {
            $table->dropColumn('username');
        });
    }
}
