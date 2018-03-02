@extends('layouts.app')
@section('content')

<div class="container">

        <h2 class="form-signin-heading">Please create your Question</h2>

        <form method="post" action=" {{ action('QuestionsController@store') }} ">
            {!! csrf_field() !!}
            <label class="sr-only">Question</label>
            <input class="form-control" name="question" placeholder="Quesion" required autofocus><br>
            <label for="inputPassword" class="sr-only">Answer</label>
            <input class="form-control" name="code" placeholder="options" required><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Number</button>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Next</button>
        </form>
</div>

@endsection