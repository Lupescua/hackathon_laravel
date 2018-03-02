<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/create', 'QuestionsController@create');
// Route::get('/question/{id}', 'QuestionsController@show'); // the id comes from the nr of options desired


// Route::post('/exibit', 'QuestionsController@show');

Route::post('/store', 'QuestionsController@store');

// Route::post('/', 'OptionsController@store');

// Route::get('/', 'AnswersController@index'); //todo
