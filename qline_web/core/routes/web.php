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
