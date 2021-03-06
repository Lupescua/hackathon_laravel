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
Route::get('/middle/{id}', 'QuestionsController@show'); // the id comes from the nr of options desired

Route::post('/store', 'QuestionsController@store');

Route::post('/store_option', 'OptionsController@store');

Route::get('/final/{id}', 'OptionsController@show');

// Route::post('/', 'OptionsController@store');

Route::get('/answers', 'AnswerController@show'); //todo

Route::get('/final', 'AnswerController@store');//get

Route::post('/vote', 'AnswerController@vote');
