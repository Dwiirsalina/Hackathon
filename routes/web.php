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
    return view('index');
});

<<<<<<< HEAD
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/verify/{id}','VerifyController@verify')->name('verify');
=======
Route::get('/details', function () {
    return view('details');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/profile', function () {
    return view('profile');
});

>>>>>>> 23e812b607c6260dfa1b8410b4ae5247e174dcc2
