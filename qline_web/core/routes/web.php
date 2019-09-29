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
Route::fallback('FallbackController@index')->name('fallback');
Route::any('fallback', array('uses' => 'FallbackController@index'))->name('fallback');

Route::get('/', array('uses' => 'LoginController@showLogin'));//->name('home');
//route to login
Route::get('login', array('uses' => 'LoginController@showLogin'))->name('login.showLogin');
// route to process the form
Route::post('login', array('uses' => 'LoginController@doLogin'))->name('login.doLogin');
// route to procss logout
Route::get('logout', array('uses' => 'LoginController@doLogout'))->name('login.doLogout');

Route::group(['middleware' => ['authorizedUserMiddleware', 'disablePreventBackMiddleware', 'corsMiddleware']], function(){
    
    Route::get('/home', array('uses' => 'SetupConfigurationController@index'))->name('home');
    
    Route::get('companies/select/all', array('uses' => 'CompanyController@selectAllCompanies'))->name('company.selectAllCompanies');
    Route::get('strategic-business-units/select/all', array('uses' => 'StrategicBusinessUnitController@selectAllStrategicBusinessUnits'))->name('strategicBusinessUnit.selectAllStrategicBusinessUnits');
    Route::get('factories/select/all', array('uses' => 'FactoryController@selectAllFactories'))->name('factory.selectAllFactories');
    Route::get('lines/select/all', array('uses' => 'LineController@selectAllLines'))->name('line.selectAllLines');
    Route::get('customers/select/all', array('uses' => 'CustomerController@selectAllCustomers'))->name('customer.selectAllCustomers');
    Route::get('styles/select/all', array('uses' => 'StyleController@selectAllStyles'))->name('style.selectAllStyles');
    Route::get('colours/select/all', array('uses' => 'ColourController@selectAllColours'))->name('colour.selectAllColours');
    Route::get('exports/select/all', array('uses' => 'ExportController@selectAllExports'))->name('export.selectAllExports');
    Route::get('standard-r-q-cs/select/all', array('uses' => 'StandardRQCController@selectAllStandarsRQCs'))->name('standardRQC.selectAllStandarsRQCs');
    Route::get('standard-sewing-checks/select/all', array('uses' => 'StandardSewingCheckController@selectAllStandardSewingChecks'))->name('standardSewingCheck.selectAllStandardSewingChecks');
    Route::get('standard-sewing-audits/select/all', array('uses' => 'StandardSewingAuditController@selectAllStandardSewingAudits'))->name('standardSewingAudit.selectAllStandardSewingAudits');
    
});
    


Route::get('/company', function () {
    return view('company');
})->name('company');
Route::get('/department', function () {
    return view('department');
});
Route::get('/factory', function () {
    return view('factory');
});
Route::get('/line', function () {
    return view('line');
});
Route::get('/section', function () {
    return view('section');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/factory_setup', function () {
    return view('factory_setup');
});
Route::get('/line_setup', function () {
    return view('line_setup');
});
Route::get('/quality_stage', function(){
   return view('quality_stage'); 
});

Route::get('/quality_stage_cutting', function(){
    return view('quality_stage_cutting');
});
Route::get('/quality_stage_rqc', function(){
    return view('quality_stage_rqc');
});
Route::get('/quality_stage_sewing_hundred_percent', function(){
    return view('quality_stage_sewing_hundred_percent');
});
Route::get('/quality_stage_sewing_aql_audit', function(){
    return view('quality_stage_sewing_aql_audit');
});
Route::get('/quality_stage_finishing', function(){
    return view('quality_stage_finishing');
});
Route::get('/quality_stage_cni', function(){
    return view('quality_stage_cni');
});

Route::get('/quality_stage_about', function(){
    return view('quality_stage_about');
});
Route::get('/quality_stage_contact', function(){
    return view('quality_stage_contact');
});

Route::get('/quality_stage_rqc_search', function(){
    return view('quality_stage_rqc_search');
});
Route::get('/quality_stage_rqc_record', function(){
    return view('quality_stage_rqc_record');
});
Route::get('/quality_stage_rqc_view', function(){
    return view('quality_stage_rqc_view');
});

Route::get('/quality_stage_rqc_create', function(){
    return view('quality_stage_rqc_create');
});

Route::get('/quality_stage_sewing_hundred_percent_scan', function(){
    return view('quality_stage_sewing_hundred_percent_scan');
});

Route::get('/quality_stage_sewing_hundred_percent_history', function(){
   return view('quality_stage_sewing_hundred_percent_history'); 
});

Route::get('quality_stage_sewing_aql_audit_data', function(){
    return view('quality_stage_sewing_aql_audit_data');
});
////////////////////////////////////////////////////////
/*
Roue::get('/test', function(){
    use GuzzleHttp\Exception\GuzzleException;
    use GuzzleHttp\Client;
    $client = new Client(); //GuzzleHttp\Client
    $result = $client->post('your-request-uri', [
        'form_params' => [
            'sample-form-data' => 'value'
        ]
    ]);
});

Route::get('/test', function(){
    $client = new \GuzzleHttp\Client();
    $response = $client->request('POST', 'http://localhost:8001/api/store', [
        'form_params' => [
            'name' => 'krunal',
        ]
    ]);
    $response = $response->getBody()->getContents();
    echo '<pre>';
    print_r($response);
});
*/
/*
Route::get('/test', function(){
    $client = new \GuzzleHttp\Client();
    $request = $client->get('http://localhost:8000');
    $response = $request->getBody();
   
    //dd($response);
    $response = $response->getContents();
    echo '<pre>';
    print_r($response);
});
*/
Route::get('/test', function(){
    $client = new \GuzzleHttp\Client();
    $request = $client->get('http://localhost/qline_project/qline_web/home');
    $response = $request->getBody();
   
    //dd($response);
    $response = $response->getContents();
    echo '<pre>';
    print_r($response);
});
