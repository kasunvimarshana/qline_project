<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
//use Illuminate\Http\Response;
use DB;
use Illuminate\Support\Str;
use Illuminate\Http\JsonResponse;
use \StdClass;
use \Exception;
use Carbon\Carbon;
//use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session as Session;
//use Illuminate\Support\Facades\Cookie as Cookie;
//use Illuminate\Http\Request;
//use GuzzleHttp\Psr7\Request as GuzzleRequest;
//use GuzzleHttp\Psr7\MultipartStream as GuzzleMultipartStream;
use GuzzleHttp\Client as Client;
//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

use App\Http\Resources\CommonResponseResource as CommonResponseResource;
use App\Enums\HTTPStatusCodeEnum as HTTPStatusCodeEnum;

class SetupConfigurationController extends Controller
{
    //
    protected $app_url_api;
    protected $authorizedDataArray;
    
    function __construct(){
        $this->app_url_api = config('app.app_url_api');
        $this->authorizedDataArray = array(
            'input_key_token' => null,
            'input_key_user' => null,
        );
    }
    
    //public function index(Request $request){}
    
    public function setAuthorizedDataArray(Request $request = null){
        // get input value
        $this->authorizedDataArray = array(
            'input_key_token' => $request->session()->get('input_key_token', null),
            'input_key_user' => $request->session()->get('input_key_user', null)
        );
    }
    
    public function index(Request $request){
        if(view()->exists('home')){
            return View::make('home', []);
        }
    }
}
