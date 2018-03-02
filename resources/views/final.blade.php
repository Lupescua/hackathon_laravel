@extends('layouts.app') @section('content')

<div class="container">

    <h2 class="form-signin-heading">{{$question->question_text}}</h2>

    <!-- <h3></h3>//will insert question text from database -->
    <form method="post" action="{{ action('AnswerController@vote') }}">
    {!! csrf_field() !!}

        @foreach($question->options as $option)

        <input type="radio" value="{{$option->id}}" name="option_id">
        {{$option->option_text}}
        </br>

        @endforeach

        <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
    </form>

</div>

@endsection