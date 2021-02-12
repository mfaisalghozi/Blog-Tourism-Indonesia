<?php

use Illuminate\Support\Facades\Route;

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

// Routing to Landing Page
Route::get('/', 'HomeController@welcome');

// Routing to Abous Us Page
Route::get('/aboutus', 'HomeController@about');

// Routing to Article
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/article/{id}', 'ArticleController@show');

// Routing for admin role
Route::get('/user', 'HomeController@showUser');
Route::get('/user/article', 'HomeController@showUserArticle');
Route::delete('/user/delete/{id}', 'HomeController@userDestroy');

// Routing for user role
Route::get('/profile/{id}', 'UserController@index');
Route::get('/blog/newBlog', 'ArticleController@create');
Route::get('/blog/{id}', 'UserController@blog');
Route::post('/blog/{id}', 'ArticleController@store');
Route::patch('/profile/{id}/edit', 'UserController@update');
Route::delete('/blog/delete/{id}', 'ArticleController@destroy');

//Routing For Each Category
Route::get('/category/{id}', 'HomeController@category');

Auth::routes();
