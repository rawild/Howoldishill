@extends('layouts.master')

@section('contents')
  <h1>Question {{$question_index + 1}}</h1>

  <div class='question'>
    <h2>{{$question->question}}</h2>
    <form method='POST' action='/guess'>
      <div class='row'>
      <div class='col-md-6 col-md-offset-1'>
        <div class='form-group' id='answers'>
          @foreach ($question->answers as $answer)
             <?php $checked = ($answer->id == $oldanswer) ? 'checked' : '' ?>
             <div class="radio">
               <label>
                 <input type='radio' name='answer' value='{{$answer->id}}' required {{$checked}}>   {{$answer->answer}}
               </label>
             </div>
          @endforeach
        </div>
      </div>
    </div>
      <input type='hidden' name='_token' value='{{ csrf_token() }}'>
      <input type='hidden' name='game_id' value='{{$game_id}}'>
      <input type='hidden' name='question_index' value='{{$question_index}}'>

      <input class="btn btn-primary " type="submit" Name="Submit" value="Guess!">
    </form>
  </div>


@stop
