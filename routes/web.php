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
Route::get('/rss', 'HomeController@rss');

Route::prefix('news')->group(function () {
    Route::get('/{article}', 'NewsController@show');
    Route::get('/{article}/download', 'NewsController@download');
});

Auth::routes();

Route::get('/verify/{confirmationCode}', 'Auth\VerifyController@show');
Route::post('/verify/{confirmationCode}', 'Auth\VerifyController@verify');

Route::middleware(['auth'])->group(function() {
    Route::prefix('admin')->group(function () {
        Route::get('/', 'AdminController@index')->name('home');
        
        Route::prefix('articles')->group(function () {
            Route::get('/', 'ArticleController@index');
            Route::get('/create', 'ArticleController@create');
            Route::post('/store', 'ArticleController@store');
            Route::get('/{id}/show', 'ArticleController@show');
            Route::get('/{id}/destroy', 'ArticleController@destroy');
        });
    });
});

//Route::middleware(['auth'])->group(function () {
//    Route::get('/articles', 'ArticleController@index');
//    Route::get('/articles/create', 'ArticleController@create');
//    Route::post('/articles/store', 'ArticleController@store');
//    Route::get('/articles/{id}/show', 'ArticleController@show');
//    Route::get('/articles/{id}/destroy', 'ArticleController@destroy');
//});
