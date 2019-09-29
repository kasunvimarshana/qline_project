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

class ExportController extends Controller
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
    
    public function index(Request $request){}
    
    public function setAuthorizedDataArray(Request $request = null){
        // get input value
        $this->authorizedDataArray = array(
            'input_key_token' => $request->session()->get('input_key_token', null),
            'input_key_user' => $request->session()->get('input_key_user', null)
        );
    }
    
    //other
    public function selectAllExports(Request $request){
        //
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        
        // Solution to get around integer overflow errors
        // $model->latest()->limit(PHP_INT_MAX)->offset(1)->get();
        // function will process the ajax request
        $draw = null;
        $start = 0;
        $length = 0;
        $search = null;
        $recordsTotal = 0;
        $recordsFiltered = 0;
        $query = null;
        $queryResult = null;
        //$recordsTotal = Model::where('active','=','1')->count();
        
        // validate the info, create rules for the inputs
        $rules = array();
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            //return redirect()->back()->withErrors($validator)->withInput();
        } else {
            // do process
            try {
                // Start transaction!
                //DB::beginTransaction();
                $client = new Client([
                    // Base URI is used with relative requests
                    'base_uri' => $this->app_url_api,
                ]);
                
                $this->setAuthorizedDataArray( $request );
                
                $request = $request->merge( $this->authorizedDataArray );
                $dataArray = $request->all();
                
                $response = $client->request('GET', 'exports/select/all', [
                    //'debug' => false,
                    //'verify' => false,
                    //'decode_content' => false,
                    //'stream' => false,
                    //'sink' => null,
                    //'save_to' => null,
                    //'timeout' => 0,
                    //'version' => 1.0,
                    //'config' => [],
                    //'proxy' => [],
                    //'curl' => [],
                    //'headers' => [],
                    //'body' => json_encode([]),
                    //'json' => [],
                    //'query' => [],
                    //'form_params' => [],
                    //'multipart' => [],
                    'query' => $dataArray
                ]);
                
                if($response->getStatusCode() == HTTPStatusCodeEnum::HTTP_OK){
                    $body = $response->getBody();
                    $contents = $body->getContents();
                    $contents = json_decode((string) $contents, false);
                    if( ($contents->meta->status_code == HTTPStatusCodeEnum::HTTP_OK) ){
                        $data = $contents;
                    }
                }
                
                unset($dataArray);
                
                // Commit transaction!
                //DB::commit();
            }catch(Exception $e){
                // Rollback transaction!
                //DB::rollback(); 
            }
        }
        
        //unset data
        unset( $dataArray );
        unset( $rules );
        unset( $date_today );
        unset( $current_user );
        //unset( $data );

        //return Response::json( $data );
        return response()->json( $data );
    }
}
