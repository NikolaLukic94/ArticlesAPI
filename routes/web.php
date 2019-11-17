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

Route::get('show/one/{id}','ArticleController@showOne');

Route::get('display','ArticleController@display');
Route::get('articles','ArticleController@index');
Route::get('show/{id}','ArticleController@show');
Route::post('article','ArticleController@store');
Route::put('article','ArticleController@update');
Route::delete('article/{id}','ArticleController@destroy');

Route::resource('author/{authorId}','AuthorController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/api/register', 'AuthController@register');
Route::post('/api/login', 'AuthController@login');
Route::post('/api/logout', 'AuthController@logout');