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
      //'How old is Hillary?')->pluck('id');
      $question_id = 1;

      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => '63',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => '65',
       'correct' => false
      ]);
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
       'answer' => '70',
       'correct' => false
      ]);

      //'Where is Hillary from?')->pluck('id');
      $question_id = 2;
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

      //'Where did Hillary go to College?')->pluck('id');
      $question_id = 3;
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
      //'How many terms was Hillary a Senator?')->pluck('id');
      $question_id = 4;
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => '1',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => '1 1/2',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => '1 1/3',
       'correct' => true
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => '1 3/4',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => '2',
       'correct' => false
      ]);

      //'What is Hillary\'s highest academic degree?')->pluck('id');
      $question_id = 5;
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'MBA',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'BA',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'PhD',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'JD',
       'correct' => true
      ]);

      //'Hillary belongs to which Church?')->pluck('id');
      $question_id = 6;
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'Methodist',
       'correct' => true
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'Catholic',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'Presbyterian',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'Lutheran',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'Mormon',
       'correct' => false
      ]);

      //'What major policy initiative did Hillary take on as first lady?')->pluck('id');
      $question_id = 7;
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'Education Reform',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'Campaign Finance Reform',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'Environmental Regulation',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'Health Care Reform',
       'correct' => true
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'The War On Drugs',
       'correct' => false
      ]);

      //'What is the richest SuperPAC that supports Hillary?')->pluck('id');
      $question_id = 8;
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'Keep The Promise II',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'Unintimidated PAC',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'Priorities USA Action',
       'correct' => true
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'NextGen Climate Action',
       'correct' => false
      ]);
      DB::table('answers')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'question_id' => $question_id,
       'answer' => 'American Crossroads',
       'correct' => false
      ]);

      // As a Senator, Hillary voted against which of the following?')->pluck('id');
       $question_id = 9;
       DB::table('answers')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'question_id' => $question_id,
        'answer' => 'The PATROIT Act of 2001',
        'correct' => false
       ]);
       DB::table('answers')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'question_id' => $question_id,
        'answer' => 'The PATRIOT Act Update of 2006',
        'correct' => false
       ]);
       DB::table('answers')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'question_id' => $question_id,
        'answer' => 'Authorizaton of Iraq War',
        'correct' => false
       ]);
       DB::table('answers')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'question_id' => $question_id,
        'answer' => 'H.R. 1424 - the Bank Bailout of 2008',
        'correct' => false
       ]);
       DB::table('answers')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'question_id' => $question_id,
        'answer' => 'First Round of Bush Tax Cuts in 2001',
        'correct' => true
       ]);
       //'Individuals from large banks are 4/10 of Hillary\'s top ten career donor groups. <br>
      // Indiviudals from what industry make up another 3/10 of those donor groups?'
       $question_id = 10;
       DB::table('answers')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'question_id' => $question_id,
        'answer' => 'Pharmaceuticals',
        'correct' => false
       ]);
       DB::table('answers')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'question_id' => $question_id,
        'answer' => 'Lawyers Representing Corporations',
        'correct' => true
       ]);
       DB::table('answers')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'question_id' => $question_id,
        'answer' => 'Big Agriculture',
        'correct' => false
       ]);
       DB::table('answers')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'question_id' => $question_id,
        'answer' => 'Energy',
        'correct' => false
       ]);
       DB::table('answers')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'question_id' => $question_id,
        'answer' => 'Cable/Telecommunications',
        'correct' => false
       ]);
    }
}
