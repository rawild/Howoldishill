<?php

use Illuminate\Database\Seeder;

class ScoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('scores')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'game_id' => '1',
         'score' => '3',
         'username' => 'LadyP'
        ]);
        DB::table('scores')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'game_id' => '2',
         'score' => '5',
         'username' => 'Margaret Atwood'
        ]);
        DB::table('scores')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'game_id' => '3',
         'score' => '9',
         'username' => 'Ursula'
        ]);
    }
}
