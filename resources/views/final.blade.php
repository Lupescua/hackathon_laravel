@extends('layouts.app')
@section('content')

<div class="container">

        <h2 class="form-signin-heading">{{$question->question_text}}</h2>

        <!-- <h3></h3>//will insert question text from database -->

        @foreach($question->options as $option)

        <input name="single" type="radio" value="{{$option->id}}" name="tick">
        {{$option->option_text}}</br>

        @endforeach

 <a class="btn btn-lg btn-primary btn-block" href="{{ action('AnswerController@store') }}">Submit</a>

</div>

@endsection