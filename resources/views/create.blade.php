@extends('layouts.app')
@section('content')

<div class="container">

        <h2 class="form-signin-heading">Please create your Question</h2>

        <form method="post" action=" {{ action('QuestionsController@store') }} ">
            {!! csrf_field() !!}
            <label class="sr-only">Question</label>
            <input class="form-control" name="question" placeholder="Please enter your question" required autofocus><br>
            <label for="inputPassword" class="sr-only">Number of options</label>
            <input class="form-control" name="ans" placeholder="Enter number of possible options" required><br>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Create</button>
        </form>
</div>

@endsection