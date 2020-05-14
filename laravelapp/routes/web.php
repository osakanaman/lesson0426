<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;


/*ルーティング複数アクション*/
// Route::get('hello', 'HelloController@index');
// Route::get('hello/other', 'HelloController@other');

// /*シングルアクション*/
// Route::get('hello', 'HelloController');

/*Request, Response*/
Route::get('hello', 'HelloController@index')
->middleware(HelloMiddleware::class);

Route::post('hello', 'HelloController@post');


