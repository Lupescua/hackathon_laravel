@extends('layouts.app')
@section('content')

<div class="container">

        <h2 class="form-signin-heading">Please add your option</h2>

        <form method="post" action=" {{ action('QuestionsController@store') }} ">
            {!! csrf_field() !!}
            <label class="sr-only"></label>
            <label class="sr-only">Option</label>
            <input class="form-control" name="option" placeholder="Enter your option text"><br>

            <button class="btn btn-lg btn-primary btn-block" type="submit" name="add-option">Create</button>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="finished">Finish</button>
        </form>
</div>

@endsection