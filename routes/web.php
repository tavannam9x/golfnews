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

Route::get('/', 'PostController@index')->name('home');
Route::get('/post', function () {
    return view('post');
});
Route::get('/video', function () {
    return view('video');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/dangki', function () {
    return view('dangki');
});


