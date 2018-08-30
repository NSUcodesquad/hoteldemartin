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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/makereview', 'PagesController@makereview');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/reserve', 'PagesController@reserve');
Route::resource('posts', 'PostsController');
Route::resource('reviews', 'ReviewController');
Route::resource('contacts', 'ContactController');
Route::resource('admins', 'AdminController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
