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

Route::get('/my-articles', 'ArticleController@my');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/articles', 'ArticleController@index')->name('articles.index');
Route::get('/articles/create', 'ArticleController@create')->name('articles.create');
Route::get('/articles/{article}', 'ArticleController@show')->name('articles.show');

Route::get('/articles/{article}/edit', 'ArticleController@edit')->name('articles.edit');

Route::post('/articles', 'ArticleController@store')->name('articles.store');
Route::patch('/articles/{article}', 'ArticleController@update')->name('articles.update');
Route::delete('/articles/{article}', 'ArticleController@destroy')->name('articles.destroy');

Route::get('/category/{category}', 'CategoryController@index')->name('category.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
