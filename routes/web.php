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
Route::get('/index', 'PagesController@index');
Route::get('/design','PagesController@design');
Route::get('/index2','PagesController@index2');
Route::get('/tabler','PagesController@tabler');
Route::get('/chart','PagesController@chart');
