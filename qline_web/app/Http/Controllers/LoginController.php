<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Response;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use DB;
use Carbon\Carbon;
use \Exception;
use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
    //
    function __construct(){}
    
    public function index(){}
    
    public function showLogin(){
        if(view()->exists('login')){
            return View::make('login');
        }
    }
    
    public function doLogin(){
        // validate the info, create rules for the inputs
    }
    
    public function doLogout(){
        //$exitCode = Artisan::call('cache:clear');
    }
    
}
