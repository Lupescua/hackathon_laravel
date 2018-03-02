@extends('layouts.app') @section('content')

<div class="container">

    <h2 class="form-signin-heading">Please add your option</h2>


    <div class="container ">
        <h2 class="form-signin-heading">{{$question->question_text}}</h2>
        @foreach($question->options as $option) {{$option->option_text}}

        </br>

        @endforeach
    </div>
    <form method="post" action=" {{ action('OptionsController@store') }} ">
        {!! csrf_field() !!}
        <label class="sr-only"></label>
        <label class="sr-only">Option</label>
        <input class="form-control" name="option" placeholder="Enter your option text">
        <br>
        <input type="hidden" name="question_id" value="{{ $question->id }}">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="add-option">Create</button>
    </form>




    <a class="btn btn-lg btn-primary btn-block" href="{{ action('OptionsController@show', [$question->id]) }}">Finish</a>



</div>

@endsection