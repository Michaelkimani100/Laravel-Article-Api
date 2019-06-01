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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//login
Route::post('login','PagesController@login');
//register
Route::post('register','UserController@register');
//User Details
Route::get('details','UserController@details');
//List All Articles
Route::get('articles','ArticleController@index');
//list single article
Route::get('article/{id}','ArticleController@show');
//Create article
Route::post('article','ArticleController@store');
//Update article
Route::put('article','ArticleController@store');
//Update Delete
Route::delete('article/{id}','ArticleController@destroy');