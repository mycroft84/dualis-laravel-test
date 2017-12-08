<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('Api')->group(function () {
    Route::get('/task','TaskController@index')->name('taskIndex');
    Route::post('/task','TaskController@create')->name('taskCreate');

    Route::get('/category','CategoryController@index')->name('categoryIndex');
    Route::post('/category','CategoryController@create')->name('categoryCreate');
    Route::delete('/category/{category}','CategoryController@delete')->name('categoryDelete')->where('category','\d+');
    Route::put('/category/{category}','CategoryController@update')->name('categoryUpdate')->where('category','\d+');

    Route::get('/question','QuestionController@index')->name('questionIndex');
    Route::post('/question','QuestionController@create')->name('questionCreate');
    Route::delete('/question/{question}','QuestionController@delete')->name('questionDelete')->where('question','\d+');
    Route::put('/question/{question}','QuestionController@update')->name('questionUpdate')->where('question','\d+');

    Route::get('/answer','AnswerController@index')->name('answerIndex');
    Route::post('/answer','AnswerController@create')->name('answerCreate');
    Route::delete('/answer/{answer}','AnswerController@delete')->name('answerDelete')->where('answer','\d+');
    Route::put('/answer/{answer}','AnswerController@update')->name('answerUpdate')->where('answer','\d+');

    Route::get('/quize','QuizeController@index')->name('quizeIndex');
});


