<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('games_answers', function (Blueprint $table) {

          # Increments method will make a Primary, Auto-Incrementing field.
          # Most tables start off this way
          $table->increments('id');

          # This generates two columns: `created_at` and `updated_at` to
          # keep track of changes to a row
          $table->timestamps();

          $table->integer('game_id')->unsigned();
          $table->foreign('game_id')->references('id')->on('games');

          $table->integer('question_id')->unsigned();
          $table->foreign('question_id')->references('id')->on('questions');

          $table->integer('answer_id')->unsigned();
          $table->foreign('answer_id')->references('id')->on('answers');

          $table->boolean('correct');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    
        Schema::drop('games_answers');

    }
}
