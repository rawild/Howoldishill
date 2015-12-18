<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Question ID 1
        DB::table('questions')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'question' => 'How old is Hillary?'
        ]);
        // Question ID 2
        DB::table('questions')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'question' => 'Where is Hillary From?'
        ]);
        // Question ID 3
        DB::table('questions')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'question' => 'Where did Hillary go to college?'
        ]);
        // Question ID 4
        DB::table('questions')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'question' => 'How many terms was Hillary a Senator?'
        ]);
        // Question ID 5
        DB::table('questions')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'question' => 'What is Hillary\'s highest academic degree?'
        ]);
        // Question ID 6
        DB::table('questions')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'question' => 'Hillary belongs to which Church?'
        ]);
        // Question ID 7
        DB::table('questions')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'question' => 'What major policy initiative did Hillary unsuccesfully take on as first lady?'
        ]);
        // Question ID 8
        DB::table('questions')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'question' => 'What is the richest SuperPAC that supports Hillary?'
        ]);
        // Question ID 9
        DB::table('questions')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'question' => 'As a senator, Hillary voted against which of the following?'
        ]);
        // Question ID 10
        DB::table('questions')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'question' => 'Individuals from large banks are 4/10 of Hillary\'s top ten career donor groups.
          Individuals from what industry make up another 3/10 of those donor groups?'
        ]);
    }
}
