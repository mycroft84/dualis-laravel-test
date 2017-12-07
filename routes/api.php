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
});


