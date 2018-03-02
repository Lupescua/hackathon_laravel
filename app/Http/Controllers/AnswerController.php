<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{


    public function store(Request $request)
    {
        $newAnswer= new Answer(); // create a new instance of the option

        $newAnswer->user_Id = Auth::user()->id; //text1 will come from David HTML create form todo: update the 'tick' name - from David

        $newAnswer->option_id = $request->get('tick');

        $newAnswer->save();

        return redirect('AnserController@show');

    }

    public function show()
    {

        //return 'list of all questions'
      //
        return view('stats');
        //Todo: update the folder for the 'exhibit' above.
        //
    }




}
