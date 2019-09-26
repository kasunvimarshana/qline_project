<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::fallback(function () {
    //
});
*/
/*
Route::prefix('admin')->group(function () {
    Route::get('users-asd', function () {
        // Matches The "/admin/users" URL
        return "adadaddd";
    });
});
*/
/*
Route::name('admin.')->group(function () {
    Route::get('users', function () {
        // Route assigned name "admin.users"...
    })->name('users');
});
*/
Route::fallback('FallbackController@index')->name('fallback');