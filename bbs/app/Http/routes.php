<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','BbsController@index');
Route::get('/category/{id}','CategoryController@index');
Route::resource('thread.bbs', 'BbsController', ['only' => ['create', 'store']]);
Route::resource('/bbs','BbsController');
Route::resource('category.thread', 'ThreadController', ['only' => ['create', 'store']]);
Route::resource('thread', 'ThreadController', ['only' => ['create', 'show', 'store']]);
// Route::resource('bbs_comment', 'Bbs_commentController');
