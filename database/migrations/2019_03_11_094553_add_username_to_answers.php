<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class AddUsernameToAnswers extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('answers', function ($table) {
            $table->string('username');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('answers', function ($table) {
            $table->dropColumn('username');
        });
    }
}
