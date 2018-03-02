<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionsController extends Controller
{


    public function create()
    {
        return view('create'); //this comes form resources/view/create Todo: create submit form fields - David
    }


    public function store(Request $request)
    {
        $newQuestion = new \App\Question(); // create a new instance of the question

        $newQuestion->question_text = $request->get('question'); //text1 will come from David HTML create form todo: update the 'text1' from David
        $newQuestion->user_id = Auth::user()->id;

        $newQuestion->save();

        return redirect(action('QuestionsController@show', [$newQuestion->id]));

    }

    public function show($id)
    {

        //return 'list of all questions'
        $question = \App\Question::where("id" , $id)->first();  //
        return view('middle', ['question' => $question]);
        //Todo: update the folder for the 'exhibit' above.
        //
    }

}
