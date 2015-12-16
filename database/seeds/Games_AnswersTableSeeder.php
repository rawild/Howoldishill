<?php

use Illuminate\Database\Seeder;

class Games_AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('games_answers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'game_id' => '1',
         'question_id' => '1',
         'answer_id' => '3',
         'correct' => false
        ]);
        DB::table('games_answers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'game_id' => '1',
         'question_id' => '2',
         'answer_id' => '8',
         'correct' => false
        ]);
        DB::table('games_answers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'game_id' => '1',
         'question_id' => '3',
         'answer_id' => '9',
         'correct' => false
        ]);

        DB::table('games_answers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'game_id' => '2',
         'question_id' => '1',
         'answer_id' => '1',
         'correct' => true
        ]);
        DB::table('games_answers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'game_id' => '2',
         'question_id' => '2',
         'answer_id' => '7',
         'correct' => false
        ]);
        DB::table('games_answers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'game_id' => '2',
         'question_id' => '3',
         'answer_id' => '11',
         'correct' => false
        ]);

        DB::table('games_answers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'game_id' => '3',
         'question_id' => '1',
         'answer_id' => '1',
         'correct' => true
        ]);
        DB::table('games_answers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'game_id' => '3',
         'question_id' => '2',
         'answer_id' => '6',
         'correct' => true
        ]);
        DB::table('games_answers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'game_id' => '3',
         'question_id' => '3',
         'answer_id' => '9',
         'correct' => false
        ]);
    }
}
