<?php

Route::get('/','Admin\AdminController@index');
Route::get('/category','Admin\CategoryController@index')->name('get_admin_categories');

?>