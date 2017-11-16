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

/*Route::get('/world', function () {
    return 'Hello World';
});*/

Route::get('/world', 'TestController@index')->name('testIndex');

Route::post('/user', 'TestController@userStore')->name('testUserStore');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/thieves','ThievesController@index')->name('thievesIndex');
Route::get('/thieves/{thief}','ThievesController@update')->name('thievesUpdate')->where('thief','\d+');
Route::get('/thieves/create','ThievesController@create')->name('thievesCreate');
Route::post('/thieves/store/{thief?}', 'ThievesController@store')->name('thievesStore')->where('thief','\d+');
Route::delete('/thieves/{thief}', 'ThievesController@delete')->name('thiefDelete')->where('thief','\d+');