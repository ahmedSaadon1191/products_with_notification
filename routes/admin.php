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

####################### Start Routes AdminPanel #######################

Route::prefix('admin')->group(function()
{

    ####################### Start Routes CATEGORY #######################
    Route::prefix('categories')->namespace('Admin')->group(function()
    {
        Route::get('/','categoriesController@index')->name('categories.index');
        Route::post('/store','categoriesController@store')->name('categories.store');
        Route::post('/update/{id}','categoriesController@update')->name('categories.update');
        Route::delete('/destroy/{id}','categoriesController@destroy')->name('categories.destroy');
    });
    ####################### End Routes CATEGORY #######################

    ####################### Start Routes SUB CATEGORY #######################
    Route::prefix('sub_Categories')->namespace('Admin')->group(function()
    {
        Route::get('/','subCategoriesController@index')->name('sub_Categories.index');
        Route::post('/store','subCategoriesController@store')->name('sub_Categories.store');
        Route::post('/update/{id}','subCategoriesController@update')->name('sub_Categories.update');
        Route::delete('/destroy/{id}','subCategoriesController@destroy')->name('sub_Categories.destroy');
    });
    ####################### End Routes SUB CATEGORY #######################

    ####################### Start Routes PRODUCTS #######################
    Route::prefix('products')->namespace('Admin')->group(function()
    {
        Route::get('/','productsController@index')->name('products.index');
        Route::post('/store','productsController@store')->name('products.store');
        Route::post('/update/{id}','productsController@update')->name('products.update');
        Route::delete('/destroy/{id}','productsController@destroy')->name('products.destroy');

        Route::get('/subCategory/{id}','productsController@get_subCategory')->name('products.get_subCategory');
        Route::get('/imageId/{id}','productsController@imageId')->name('products.imageId');
    });
    ####################### End Routes PRODUCTS #######################

    ####################### Start Routes IMAGES PRODUCT #######################
    Route::prefix('imagesProduct')->namespace('Admin')->group(function()
    {
        Route::get('/','ImageProductController@index')->name('imagesProduct.index');
        Route::post('/store','ImageProductController@store')->name('imagesProduct.store');
        Route::post('/update/{id}','ImageProductController@update')->name('imagesProduct.update');
        Route::delete('/destroy/{id}','ImageProductController@destroy')->name('imagesProduct.destroy');

        Route::get('/subCategory/{id}','ImageProduct@get_subCategory')->name('imagesProduct.get_subCategory');
    });
    ####################### End Routes IMAGES PRODUCT #######################

    ####################### Start Routes POSTS ABROVAL #######################
    Route::prefix('permissions')->namespace('Admin')->group(function()
    {
        Route::get('/index','permissionsController@index')->name('posts.permisions.index');
        Route::get('/abrove/{id}','permissionsController@abrove')->name('posts.permisions.abrove');
        Route::get('/unAbrove/{id}','permissionsController@unAbrove')->name('posts.permisions.unAbrove');
        Route::get('/show/{id}','permissionsController@show')->name('posts.permisions.show');

        // NOTIFECATIONS
        // Route::get('/show/{id}','permissionsController@show')->name('posts.permisions.show');
    });
    ####################### End Routes POSTS ABROVAL #######################
});
