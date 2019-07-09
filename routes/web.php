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

//Pages Controller
Route::get('/', 'PagesController@getHome');
Route::get('top100', 'PagesController@getTop100');
Route::get('mv', 'PagesController@getMV');
Route::get('/form', function () { return view('form');});
Route::get('/newsong', 'PagesController@getAddSong');
Route::get('/phpInfo', 'PagesController@getPhpInfo');

// Song Controller
Route::post('/song/submit', 'SongController@submitSong');

// User Controller
Route::get('/login','UserController@getLogin');
Route::post('/login/submit', 'UserController@login');
Route::post('/login/signUp', 'UserController@signUp');