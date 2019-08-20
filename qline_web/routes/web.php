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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', array('uses' => 'LoginController@showLogin'))->name('home');

//test
Route::get('login', array('uses' => 'LoginController@showLogin'))->name('login.showLogin');
// route to process the form
Route::post('login', array('uses' => 'LoginController@doLogin'))->name('login.doLogin');
// route to procss logout
Route::get('logout', array('uses' => 'LoginController@doLogout'))->name('login.doLogout');

//temp routes
Route::get('/home', function () {
    return view('home');
});

Route::get('/company', function () {
    return view('company');
});

