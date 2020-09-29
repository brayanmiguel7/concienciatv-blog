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

Route::get('/', 'GuestController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts/new', 'PostsController@new')->name('newPost');
Route::post('/posts', 'PostsController@save')->name('savePost');

Route::get('/posts/{postBySlug}', 'GuestController@show');


Route::get('/posts/{post}/edit', 'PostsController@edit') -> middleware('can:update,post');
Route::put('/posts/{post}', 'PostsController@update') -> middleware('can:update,post');

Route::get('/periodistas/{user}', 'UserController@show');
