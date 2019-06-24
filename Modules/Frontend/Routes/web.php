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

    Route::get('/', 'FrontendController@index');
    Route::get('/technology', 'FrontendController@technology');
    Route::get('/travel', 'FrontendController@travel');
    Route::get('/foods', 'FrontendController@food');

    Route::get('/single_blog/{id}', 'FrontendController@single_blog')->name('frontend.single_blog');

    Route::get('photo/gallery', 'FrontendController@gallery');
    Route::get('photo/gallery/{id}', 'FrontendController@showAlbum');

