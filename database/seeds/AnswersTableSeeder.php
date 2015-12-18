<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => '1',
       'answer' => 'Dummy Answer',
       'correct' => true
      ]);
      $question_id = \Howoldishill\Question::where('question','=','How old is Hillary?')->pluck('id');
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => '68',
       'correct' => true
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => '60',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => '71',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => '70',
       'correct' => false
      ]);

      $question_id = \Howoldishill\Question::where('question','=','Where is Hillary from?')->pluck('id');
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'Arkansas',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'Illinois',
       'correct' => true
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'New York',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'Connecticut',
       'correct' => false
      ]);

      $question_id = \Howoldishill\Question::where('question','=','Where did Hillary go to College?')->pluck('id');
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'Vassar',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'Oberlin',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'Yale',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'Wellesley',
       'correct' => true
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'Smith',
       'correct' => false
      ]);


    }
}
