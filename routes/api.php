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


Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');

Route::group(['middleware' => 'jwt.auth'], function(){
	Route::post('logout', 'AuthController@logout');
	Route::get('user', 'AuthController@user');
	Route::post('article/update/{id}', 'ArticleController@update');
});
Route::group(['middleware' => 'jwt.refresh'], function(){
	Route::get('refresh', 'AuthController@refresh');
});



//public routes
Route::get('articles', 'ArticleController@index');
Route::get('article/{id}', 'ArticleController@show');

