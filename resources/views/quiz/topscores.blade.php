@extends('layouts.master')

@section('contents')
  <div class='topscores'>
    <table class="table table-bordered table-condensed">
      <th>Username</th><th>Score</th>
    @foreach($topscores as $Score)
    <tr>
      <td>{{$Score->username}} </td><td>{{ $Score->score }} </td>
    </tr>
    @endforeach
  </table>
  </div>
  <form method='GET' action="/start">
    <input class="btn btn-default" type="submit" name="Submit" value="Play Again">
  </form>
  <form method='GET' action="/">
    <input class="btn btn-default" type="submit" name="Submit" value="Home">
  </form>
@stop
