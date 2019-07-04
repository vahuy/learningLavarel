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
    return view('home');
});

Route::get('/form', function () { return view('form');});

Route::get('#', function () { return view('home');});

Route::get('/top100', function () { return view('top100');});

Route::get('/mv', function () { return view('mv');});