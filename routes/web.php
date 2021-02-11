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

// Routing get all users
Route::get('/user', 'HomeController@showUser');
Route::delete('/user/delete/{id}', 'HomeController@userDestroy');

Auth::routes();
