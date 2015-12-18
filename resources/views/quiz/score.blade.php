@extends('layouts.master')


@section('contents')
<div class="row">
  <div class="col-md-6">
    <h2>How'd you do?</h2>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-md-offset-1">
    <h3>{{$Result}} So...</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-md-offset-2">
    <h3>Your score is {{ $Score->score }}</h3>
  </div>
</div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    <form class="form" method='POST' action="/score" id='scoreform'>
      <h4>To post your score:</h4>
      Enter your player name -->
      <input type="text" name="username"> <br>
      <button class="btn btn-success" type="submit" id='scorebutton' >Add Your Score</button>
      <input type='hidden' name='_token' value='{{ csrf_token() }}'>
      <input type='hidden' name='game_id' value='{{ $Score->game_id }}'>
    </form>
    <div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-6">
      <a class="btn btn-primary btn-block" role="button" href="http://p4.kygy.xyz/start" >Play Again</a>
    </div>
    <div class="col-md-6">
      <a class="btn btn-default btn-block" role="button" href="http://p4.kygy.xyz/" >Home</a>
    </div>

  </div>

@stop
