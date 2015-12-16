<?php

namespace Howoldishill\Http\Controllers;

use Howoldishill\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class QuizController extends Controller {

  //protected $game_id = '0';
  //protected $question_ids = '0';

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    //Function for starting the game!
    public function getStart(Request $request) {
      //Get a new game id
      $Game = new \Howoldishill\Game();
      $Game->lifeline = "1";
      $Game->save();
      $game_id = $Game->id;

      //Get a random order of questions
      $question_ids = range(1,3);
      shuffle($question_ids);

      $question_index = 0;

      foreach($question_ids as $question_id) {
          $Game_Answer = new \Howoldishill\GamesAnswer();
          $Game_Answer->game_id = $game_id;
          $Game_Answer->question_id = $question_id;
          $Game_Answer->answer_id = 1;
          //$Game_Answer->correct = 0;
          $Game_Answer->save();
        }

      //Get the first question with the associated answers
      $question = \Howoldishill\Question::with('answers')->find($question_ids[0]);


      return view('quiz.question')
        ->with([ 'question' => $question,
          'game_id' => $game_id,
          'question_index' => $question_index,
          'oldanswer' => '0'
          ]);
      //return view('quiz.question')->with('tID', $tGame->id,'question_index', '1', ['questions' => $question_ids]);
    }
    //Gets the next page for guessing
    public function postQuestion(Request $request){
      // how far are we in the game
      $question_index = $request->question_index;
      // what questions are associated with this game
      $game_answers = \Howoldishill\GamesAnswer::with('question')->where('game_id','=',$request->game_id)->get();
      $question = $game_answers[$question_index]->question;
      return view('quiz.question')
        ->with(['question' => $question,
        'game_id' => $request->game_id,
        'question_index' => $question_index,
        'oldanswer' => '0'
        ]);

    }

    public function postGuess(Request $request){


      $Answer = \Howoldishill\Answer::find($request->answer);
      $game_answers = \Howoldishill\GamesAnswer::with('answer')->with('game')->where('game_id','=',$request->game_id)->get();
      $question_index = $request->question_index;
      $Game_Answer = $game_answers[$question_index];
      $Game_Answer->answer_id = $Answer->id;
      $Game_Answer->correct = $Answer->correct;
      $Game_Answer->save();
      $Result = "You gotta brush up a bit.";
      $lifeline = $Game_Answer->game->lifeline;
      if ($Game_Answer->correct == 1){
        $Result = "Congrats! You know the Hillz!";
        $lifeline = "";
      }
      $question_index = $question_index + 1;

      // are we at the end of the quiz?
      if ($question_index == count($game_answers)) {
        $Result = "Last question: ".$Result;
        if (($Game_Answer->correct == 1) || ($lifeline != 1)) {
          $Score = new \Howoldishill\Score();
          $Score->game_id = $request->game_id;
          $score = 0;
          foreach($game_answers as $answer){
            if ($answer->correct == '1'){
              $score = $score + 1;
            }
          }
          $Score->score = $score;
          $Score->save();
          return view('quiz.score')
            ->with([ 'Result' => $Result,
              'Score' => $Score
            ]);
          }
      }
        return view('quiz.result')
          ->with(['Result' => $Result,
          'game_id' => $request->game_id,
          'question_index' => $question_index,
          'lifeline' => $lifeline,
          'oldanswer' => $request->answer]);

    }


    public function postRetry(Request $request){

      $Game = \Howoldishill\Game::find($request->game_id);
      $Game->lifeline = '0';
      $Game->save();

      $question_index = $request->question_index - 1;
      $game_answers = \Howoldishill\GamesAnswer::with('question')->where('game_id','=',$request->game_id)->get();
      $question = $game_answers[$question_index]->question;

      return view('quiz.question')
        ->with(['question' => $question,
        'game_id' => $request->game_id,
        'question_index' => $question_index,
        'oldanswer' => $request->oldanswer
        ]);
    }

    public function postScore(Request $request){
      $Score = \Howoldishill\Score::where('game_id','=', $request->game_id)->get();
      $score = $Score->pop();
      $score->username = $request->username;
      $score->save();


      $topscores = \Howoldishill\Score::where('username','!=', '')->orderby('score', 'DESC')->get();
      return view('quiz.topscores')
        ->with('topscores', $topscores);
    }
    public function getScore(Request $request){
      $topscores = \Howoldishill\Score::where('username','!=', '')->orderby('score', 'DESC')->get();
      return view('quiz.topscores')
        ->with('topscores', $topscores);
    }

  }
