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
//Route::fallback('FallbackController@index')->name('fallback');
/*
Route::match(['get', 'post'], '/', function () {
    //
});

Route::any('/', function () {
    //
});

Route::redirect('/here', '/there');
Route::redirect('/here', '/there', 301);
Route::permanentRedirect('/here', '/there');

Route::get('user/{name?}', function ($name = null) {
    return $name;
});

Route::get('user/{id}/{name}', function ($id, $name) {
    //
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
*/
/*
Route::middleware('auth:api', 'throttle:60,1')->group(function () {
    Route::get('/user', function () {
        //
        // The  throttle middleware accepts two parameters that determine the maximum number of requests that can be made in a given number of minutes
        // (throttle:[number of requests], [number of minutes])
    });
});
*/
/*
Route::get('/', function () {
    //echo Auth::check();
    //dd( Auth::user() );
    //return abort(403, 'Unauthorized action.');
})->middleware('disablePreventBackMiddleware');

Route::fallback(function () {
    //
});
*/
Route::fallback('FallbackController@index')->name('fallback');
/////////////////////////////////////////////////////////////////////////////////////


Route::get('companies/create', array('uses' => 'CompanyController@store'))->name('company.store');
Route::get('companies/select', array('uses' => 'CompanyController@show'))->name('company.show');
Route::get('companies/select/all', array('uses' => 'CompanyController@selectCompanies'))->name('company.selectCompanies');
Route::get('logins/do-login', array('uses' => 'LoginController@doLogin'))->name('login.dologin');
Route::get('logins/do-logout', array('uses' => 'LoginController@doLogout'))->name('login.doLogout');



//Route::get('api/test', array('uses' => 'LoginController@doLogout'));