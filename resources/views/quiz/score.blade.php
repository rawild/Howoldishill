@extends('layouts.master')

@section('contents')
<h1>YOU FINISHED!!</h1>
On the last question: {{ $Result }}
  <div class='score'>
    <h1>Your score is: {{ $Score->score }}</h1>
    <form class="form-inline" method='POST' action="/score">
      Username:
      <input type="text" name="username">
      <input type='hidden' name='_token' value='{{ csrf_token() }}'>
      <input type='hidden' name='game_id' value='{{ $Score->game_id }}'>
      <button class="btn btn-default" type="submit" >Add Your Score</button>
    </form>
    <form method='GET' action="/start">
      <input class="btn btn-default" type="submit" name="Submit" value="Play Again">
    </form>
  </div>
@stop
