<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('userLogin','UsersController@userLogin');
//Route::post('userRegister','UsersController@userRegister');
//
//Route::group(['middleware' => 'auth:api'],function(){
//   Route::get('userDetails', 'UsersController@userDetails');
//});

//Route::post('/onload/likes/','DiscussionController@onLoadLikes');