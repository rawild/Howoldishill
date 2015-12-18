@extends('layouts.master')

@section('contents')
<div name='results'>
  {{$Result}}

  @if($Result != "Oops, you got the last one wrong.")
  <form method='POST' action="/question">
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <input type='hidden' name='game_id' value='{{ $game_id }}'>
    <input type='hidden' name='question_index' value='{{ $question_index }}'>
    <input class="btn btn-success" type="submit" Name="Submit" value="Next Question">
  </form>
  <br>
  @endif

  @if($lifeline == 1)
  <br>You get one retry per game. Do you want to use it?
  <form method='POST' action="/retry">
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <input type='hidden' name='game_id' value= '{{ $game_id }}'>
    <input type='hidden' name='question_index' value='{{ $question_index }}'>
    <input type='hidden' name='oldanswer' value='{{ $oldanswer }}'>
    <input class="btn btn-warning" type="submit" Name="Submit" value="Retry Question">
  </form>
  @endif
</div>
@stop
