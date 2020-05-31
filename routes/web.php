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

Auth::routes(['register' => true]);
Route::name('login')->get('admin', 'Auth\LoginController@showLoginForm');
Route::post('admin', 'Auth\LoginController@login');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'PostsController@index');

Route::name('posts_path')->get('/posts', 'PostsController@index');
Route::name('create_post_path')->get('/post/create', 'PostsController@create')->middleware('auth');
Route::name('store_post_path')->post('/post', 'PostsController@store')->middleware('auth');
Route::name('post_path')->get('/post/{id}', 'PostsController@show');
Route::name('edit_post_path')->get('/post/{id}/edit', 'PostsController@edit')->middleware('auth');
Route::name('update_post_path')->put('/post/{id}', 'PostsController@update')->middleware('auth');
Route::name('delete_post_path')->delete('/post/{id}', 'PostsController@destroy')->middleware('auth');