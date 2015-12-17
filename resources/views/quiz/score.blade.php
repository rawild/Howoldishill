@extends('layouts.master')

@section('contents')
<h1>How'd you do?</h1>
  {{$Result}}
  <h2>and...</h2>
<h1>YOU FINISHED!!</h1>
  <div class='score'>
    <h1>Your score is: {{ $Score->score }}</h1>
    <form class="form" method='POST' action="/score" id='scoreform'>
      Username:
      <input type="text" name="username"> <br>
      <input type='hidden' name='_token' value='{{ csrf_token() }}'>
      <input type='hidden' name='game_id' value='{{ $Score->game_id }}'>
      <br>
    Only if you want to-->  <button class="btn btn-default" type="submit" >Add Your Score</button>
    </form>
    <form method='GET' action="/start">
      <input class="btn btn-default" type="submit" name="Submit" value="Play Again">
    </form>
  </div>
@stop
