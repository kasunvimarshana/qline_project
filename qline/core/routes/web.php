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

/////////////////////////////////////////////////////////////////////////////////////
Route::get('test', array('uses' => 'CompanyController@store'))->name('company.store');

Route::fallback('PageController@someMethod');
Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact info@website.com'], 404);
});
Route::fallback(function(){
    return 'We could not find this server, there are other '. auth()->user()->servers()->count() . ' under your account ......';
})->name('serverFallback');