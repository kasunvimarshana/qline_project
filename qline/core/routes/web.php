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
Route::any('fallback', array('uses' => 'FallbackController@index'))->name('fallback');
/* ****************************** */

Route::get('logins/do-login', array('uses' => 'LoginController@doLogin'))->name('login.dologin');
Route::get('logins/do-logout', array('uses' => 'LoginController@doLogout'))->name('login.doLogout');

Route::get('companies/create', array('uses' => 'CompanyController@store'))->name('company.store');
Route::get('companies/select', array('uses' => 'CompanyController@show'))->name('company.show');

Route::get('companies/select/all', array('uses' => 'CompanyController@selectAllCompanies'))->name('company.selectAllCompanies');
Route::get('strategic-business-units/select/all', array('uses' => 'StrategicBusinessUnitController@selectAllStrategicBusinessUnits'))->name('strategicBusinessUnit.selectAllStrategicBusinessUnits');
Route::get('factories/select/all', array('uses' => 'FactoryController@selectAllFactories'))->name('factory.selectAllFactories');
Route::get('lines/select/all', array('uses' => 'LineController@selectAllLines'))->name('line.selectAllLines');
Route::get('colours/select/all', array('uses' => 'ColourController@selectAllColours'))->name('colour.selectAllColours');
Route::get('customers/select/all', array('uses' => 'CustomerController@selectAllCustomers'))->name('customer.selectAllCustomers');
Route::get('styles/select/all', array('uses' => 'StyleController@selectAllStyles'))->name('style.selectAllStyles');
Route::get('exports/select/all', array('uses' => 'ExportController@selectAllExports'))->name('export.selectAllExports');

Route::get('standard-r-q-cs/select/all', array('uses' => 'StandardRQCController@selectAllStandarsRQCs'))->name('standardRQC.selectAllStandarsRQCs');
Route::get('standard-sewing-checks/select/all', array('uses' => 'StandardSewingCheckController@selectAllStandardSewingChecks'))->name('standardSewingCheck.selectAllStandardSewingChecks');
Route::get('standard-sewing-audits/select/all', array('uses' => 'StandardSewingAuditController@selectAllStandardSewingAudits'))->name('standardSewingAudit.selectAllStandardSewingAudits');