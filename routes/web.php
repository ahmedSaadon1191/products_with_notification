<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', 'LiveSearchController@index');


 ########## START POSTS PAGE ##########
 Route::prefix('posts')->namespace('User')->middleware('auth:web')->group(function()
 {
     Route::get('/','PostController@index')->name('posts.index');
     Route::get('/create','PostController@create')->name('posts.create');
     Route::post('/store','PostController@store')->name('posts.store');
     Route::get('/edit/{id}','PostController@edit')->name('posts.edit');
     Route::post('/update/{id}','PostController@update')->name('posts.update');
     Route::get('/imageId/{id}','PostController@imageId')->name('posts.imageId');
     Route::get('/destroy/{id}','PostController@destroy')->name('posts.destroy');
     Route::get('/softDelete','PostController@softDelete')->name('posts.softDelete');
     Route::get('/forceDelete/{id}','PostController@forceDelete')->name('posts.forceDelete');
 });

 ########## END POSTS PAGE ##########

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
