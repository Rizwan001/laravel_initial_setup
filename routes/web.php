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


Route::get('/profile', 'ProfileController@index')->name('profile');

Route::get('/','ForumController@discussion')->name('DDKCoin');


Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');




Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::post('share/post','DiscussionController@sharePost')->name('share_post');



Route::get('admin/home', 'Admin\AdminController@index')->middleware('admin')->name('admin');