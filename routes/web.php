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
<<<<<<< HEAD
Route::get('/middle/{id}', 'QuestionsController@show'); // the id comes from the nr of options desired
=======
// Route::get('/question/{id}', 'QuestionsController@show')->name('question_name'); // the id comes from the nr of options desired
>>>>>>> 1e76a5b8a7ed2505d4cbc70d0e181c90245f5a2a


Route::get('/middle', 'QuestionsController@show');

Route::post('/store', 'QuestionsController@store');

// Route::post('/', 'OptionsController@store');

// Route::get('/', 'AnswersController@index'); //todo
