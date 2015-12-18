<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/start','QuizController@getStart');
Route::get('/score','QuizController@getScore');
Route::post('/guess','QuizController@postGuess');
Route::post('/question','QuizController@postQuestion');
Route::post('/retry','QuizController@postRetry');
Route::post('/score','QuizController@postScore');

};
