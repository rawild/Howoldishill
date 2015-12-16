@extends('layouts.master')

@section('header')
@stop

@section('contents')
<h1>How Old is Hillary?</h1>
<h4>The Hillary Clinton Trivia Game</h4>
  <form method='GET' action="/start">
    <input class="btn btn-primary btn-lg btn-block" type="submit" Name="Submit" value="Play">
  </form>
  <form method='GET' action="/score">
    <input class="btn btn-default" type="submit" Name="Submit" value="Top Scores">
  </form>

@stop
