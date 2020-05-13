<?php

use Illuminate\Support\Facades\Route;

/*ルーティング複数アクション*/
// Route::get('hello', 'HelloController@index');
// Route::get('hello/other', 'HelloController@other');

// /*シングルアクション*/
// Route::get('hello', 'HelloController');

/*Request, Response*/
Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

/*View*/
// Route::get('hello', function(){
//   return view('hello.index');
// });
