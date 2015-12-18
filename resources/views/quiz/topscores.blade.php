@extends('layouts.master')

@section('contents')

  <div class="panel panel-default">
    <div class="panel-heading">Top Scorers</div>
      <table class="table table-bordered table-condensed">
        <th>Username</th><th>Score</th>
        @foreach($topscores as $Score)
        <tr>
          <td>{{$Score->username}} </td><td>{{ $Score->score }} </td>
        </tr>
        @endforeach
      </table>
  </div>

<div>
    <a class="btn btn-primary btn-block" role="button" href="http://p4.loc/start" >Play Again</a>
    <br>
    <a class="btn btn-default" role="button" href="http://p4.loc/" >Home</a>
</div>
@stop
