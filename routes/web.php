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

Route::get('/', 'HomeController@welcome');
Route::get('/home', 'HomeController@index')->name('home');

// Routing to Article
Route::get('/article/{id}', 'ArticleController@show');

// Routing for admin role
Route::get('/user', 'HomeController@showUser');
Route::get('/user/article', 'HomeController@showUserArticle');
Route::delete('/user/delete/{id}', 'HomeController@userDestroy');

// Routing for user role
Route::get('/profile/{id}', 'UserController@index');
Route::patch('/profile/{id}/edit', 'UserController@update');

Auth::routes();
