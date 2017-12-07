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
Route::get('/test', 'TestController@index')->name('test');

Route::get('/thieves','ThievesController@index')->name('thievesIndex');
Route::get('/thieves/{thief}','ThievesController@update')->name('thievesUpdate')->where('thief','\d+');
Route::get('/thieves/create','ThievesController@create')->name('thievesCreate');
Route::post('/thieves/store/{thief?}', 'ThievesController@store')->name('thievesStore')->where('thief','\d+');
Route::delete('/thieves/{thief}', 'ThievesController@delete')->name('thiefDelete')->where('thief','\d+');

Route::get('/cars','CarsController@index')->name('carsIndex');
Route::get('/cars/{car}','CarsController@update')->name('carsUpdate')->where('car','\d+');
Route::get('/cars/create','CarsController@create')->name('carsCreate');
Route::post('/cars/store/{car?}', 'CarsController@store')->name('carsStore')->where('car','\d+');
Route::delete('/cars/{car}', 'CarsController@delete')->name('carsDelete')->where('car','\d+');

Route::get('/exercises','ExercisesController@index')->name('exercisesIndex');Route::get('/exercises/{exercise}','ExercisesController@details')->name('exercisesDetails');
Route::post('/exercises/task','ExercisesController@task')->name('exercisesTask');
Route::post('/exercises/store','ExercisesController@store')->name('exercisesStore');

Route::prefix('posts')->group(function () {
    Route::get('/','PostsController@index')->name('postsIndex');
    Route::get('/create','PostsController@create')->name('postsCreate');
    Route::post('/store/{post?}', 'PostsController@store')->name('postsStore')->where('post','\d+');

    Route::get('/{post}','PostsController@update')->name('postsUpdate')->where('post','\d+');
    Route::delete('/{post}', 'PostsController@delete')->name('postsDelete')->where('post','\d+');

    Route::get('/comments/{post}', 'PostsController@commentList')->name('postsCommentList')->where('post','\d+');
    Route::get('/comments/enabled/{comment}', 'PostsController@commentEnabled')->name('postsCommentEnabled')->where('comment','\d+');
});

Route::prefix('hirek')->group(function () {
    Route::get('/','PostsController@lists')->name('postsList');
    Route::get('/{post}','PostsController@details')->name('postsDetails')->where('post','\d+');
    Route::post('/comment/{post}', 'PostsController@comment')->name('postsComment')->where('post','\d+');
});

Route::prefix('todo')->group(function () {
    Route::get('/','TodoController@index')->name('todoList');
    Route::delete('/delete/{task}','TodoController@delTask')->name('todoDelete')->where('task','\d+');
    Route::post('/store','TodoController@store')->name('todoStore');
    Route::get('/done/{task}', 'TodoController@done')->name('todoDone')->where('task','\d+');
});