<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use \app\Question;
class QuestionsController extends Controller
{


    public function create()
    {
        return view('create'); //this comes form resources/view/create Todo: create submit form fields - David
    }


    public function store(Request $request)
    {
        $newQuestion = new \App\Question(); // create a new instance of the question

        $newQuestion-> question_text = $request->get('question'); //text1 will come from David HTML create form todo: update the 'text1' from David

        $newQuestion->save();

        return redirect(action('QuestionsController@show', [$newQuestion->id]));

    }

    public function show($id)
    {

        //return 'list of all questions'
        $questions = \App\Question::where("id" , $id)->first();  //
        return view('middle', ['questions' => $questions]);
        //Todo: update the folder for the 'exhibit' above.
        //
    }

}
