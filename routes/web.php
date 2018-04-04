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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('videoChat', 'UsersController@videoChat')->name('videoChat');
Route::get('/videoChatSep', function () {return view('webRTC.SeparateRTC'); })->name('videoChatSep');
Route::get('/registeration', function () {return view('auth.register'); })->name('registeration');

Route::get('/test', function () {
    return view('chatBug');
});

Route::group(['Public'], function(){

    Route::get('table-dynamic', function () {return view('table-dynamic');})->name('table-dynamic');
    Route::get('advance-form', function () {return view('advance-form');})->name('advance-form');
    Route::get('blog-list', function () {return view('blog-list');})->name('blog-list');
    Route::get('blog-detail', function () {return view('blog-detail');})->name('blog-detail');

});
Auth::routes();

Route::post('doSignUp', 'UsersController@doSignUp')->name('doSignUp');
Route::get('home', 'UsersController@index')->name('home');

