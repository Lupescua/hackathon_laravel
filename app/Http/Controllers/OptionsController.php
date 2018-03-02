<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptionsController extends Controller
{

    public function create()
    {
        return view('options'); //this comes form resources/view/create Todo: create submit form fields - David
    }


    public function store(Request $request)
    {
        $newOption = new \App\Option(); // create a new instance of the option

        $newOption-> option_text = $request->get('option'); //text1 will come from David HTML create form todo: update the 'option' name - from David

        $newOption->save();

        return redirect(action('questionsController@show', [$newOption->id]));

    }

    public function show($id)
    {

        //return 'list of all questions'
        $options = \App\Option::where("id" , $id)->first();  //
        return view('exhibit', ['options' => $options]);
        //Todo: update the folder for the 'exhibit' above.
        //
    }

}
