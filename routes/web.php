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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/articles', 'ArticleController@index');
    Route::get('/articles/create', 'ArticleController@create');
    Route::post('/articles/store', 'ArticleController@store');
    Route::get('/articles/{id}/show', 'ArticleController@show');
    Route::get('/articles/{id}/destroy', 'ArticleController@destroy');
});
