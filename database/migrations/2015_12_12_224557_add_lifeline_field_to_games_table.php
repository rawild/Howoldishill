<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLifelineFieldToGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('games', function (Blueprint $table) {
        $table->integer('lifeline');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('games', function (Blueprint $table) {
        $table->dropColumn('lifeline');
      });
    }
}
