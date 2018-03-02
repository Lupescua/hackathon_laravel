@extends('layouts.app')
@section('content')

<div class="container">

        <h2 class="form-signin-heading">Please create your Question</h2>

        <form method="post" action=" {{ action('QuestionsController@store') }} ">
            {!! csrf_field() !!}
            <label class="sr-only">Question</label>
            <input class="form-control" name="question" placeholder="Please enter your question" required autofocus><br>


            <button class="btn btn-lg btn-primary btn-block" type="submit">Create</button>
        </form>
</div>

@endsection