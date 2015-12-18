@extends('layouts.master')

@section('contents')
<div class="scoreheader">
<h1>How'd you do?</h1>
</div>
  {{$Result}}
  <h2>and...</h2>
<h1>YOU FINISHED!! Your score is: {{ $Score->score }}</h1>
  <div class='score'>

    <form class="form-inline" method='POST' action="/score" id='scoreform'>
      <h4>To post your score:</h4>
      Enter your player name -->
      <input type="text" name="username">
      <button class="btn btn-success" type="submit" >Add Your Score</button>
      <input type='hidden' name='_token' value='{{ csrf_token() }}'>
      <input type='hidden' name='game_id' value='{{ $Score->game_id }}'>
    </form>
    <br>
    <form method='GET' action="/start">
      <input class="btn btn-primary btn-block" type="submit" name="Submit" value="Play Again">
    </form>
  </div>
@stop
