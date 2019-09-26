<?php

namespace App\Http\Controllers;

use App\Defect;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Response;
use Illuminate\Http\Response;
use DB;
use Illuminate\Support\Str;
use Illuminate\Http\JsonResponse;
use \StdClass;
use \Exception;
use Carbon\Carbon;
//use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Facades\Session as Session;
//use Illuminate\Support\Facades\Cookie as Cookie;
//use GuzzleHttp\Client as Client;

use App\Http\Resources\CommonResponseResource as CommonResponseResource;
use App\Enums\HTTPStatusCodeEnum as HTTPStatusCodeEnum;

class DefectController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        
        // validate the info, create rules for the inputs
        $rules = array(
            'code' => 'required|unique:defects,code'
        );
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            //return redirect()->back()->withErrors($validator)->withInput();
            $data['message_error'] = $validator->errors()->first();
            return (new CommonResponseResource( $data ))->additional(array(
                'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
            ));
        } else {
            // do process
            try {
                // Start transaction!
                DB::beginTransaction();
                
                $dataArray = array(
                    'is_visible' => $request->input('is_visible', true),
                    'is_active' => $request->input('is_active', true),
                    'colour_id' => $request->input('colour_id'),
                    'code' => $request->input('code'),
                    'name' => $request->input('name'),
                    'display_name' => $request->input('display_name'),
                    'image_uri' => $request->input('image_uri'),
                    'defect_id_parent' => $request->input('defect_id_parent'),
                    'defect_category_id' => $request->input('defect_category_id')
                );

                $defectObject = Defect::create( $dataArray );
                unset($dataArray);
                $data['defect_object'] = $defectObject;

                unset($dataArray);
                // Commit transaction!
                DB::commit();
            }catch(Exception $e){
                // Rollback transaction!
                DB::rollback(); 
                //return redirect()->back()->withInput();
                return (new CommonResponseResource( $data ))->additional(array(
                    'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
                ));
            }
        }
        
        //unset data
        unset( $dataArray );
        unset( $rules );
        unset( $date_today );
        unset( $current_user );
        //unset( $data );
        
        //return Response::json( $data );
        //return redirect()->back();
        //$http_response_code = http_response_code();
        return (new CommonResponseResource( $data ))->additional(array(
            'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_OK]
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        
        // validate the info, create rules for the inputs
        $rules = array(
            'id' => 'required|exists:defects,id',
            'defect_category_id' => 'required|exists:defects,defect_category_id'
        );
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            //return redirect()->back()->withErrors($validator)->withInput();
            $data['message_error'] = $validator->errors()->first();
            return (new CommonResponseResource( $data ))->additional(array(
                'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
            ));
        } else {
            // do process
            try {
                // Start transaction!
                DB::beginTransaction();
                
                $defectObject = new Defect();
                $defectObject = $defectObject
                    ->where('id', '=', $request->input('id'))
                    ->where('defect_category_id', '=', $request->input('defect_category_id'))
                    ->first();
                
                $data['defect_object'] = $defectObject;
                unset($dataArray);
                
                // Commit transaction!
                DB::commit();
            }catch(Exception $e){
                // Rollback transaction!
                DB::rollback(); 
                //return redirect()->back()->withInput();
                return (new CommonResponseResource( $data ))->additional(array(
                    'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
                ));
            }
        }
        
        //unset data
        unset( $dataArray );
        unset( $rules );
        unset( $date_today );
        unset( $current_user );
        //unset( $data );
        
        //return Response::json( $data );
        //return redirect()->back();
        //$http_response_code = http_response_code();
        return (new CommonResponseResource( $data ))->additional(array(
            'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_OK]
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        
        // validate the info, create rules for the inputs
        $rules = array(
            'id' => 'required|exists:defects,id',
            'defect_category_id' => 'required|exists:defects,defect_category_id'
        );
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            //return redirect()->back()->withErrors($validator)->withInput();
            $data['message_error'] = $validator->errors()->first();
            return (new CommonResponseResource( $data ))->additional(array(
                'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
            ));
        } else {
            // do process
            try {
                // Start transaction!
                DB::beginTransaction();
                
                $dataArray = array(
                    'is_visible' => $request->input('is_visible', true),
                    'is_active' => $request->input('is_active', true),
                    'colour_id' => $request->input('colour_id'),
                    'code' => $request->input('code'),
                    'name' => $request->input('name'),
                    'display_name' => $request->input('display_name'),
                    'image_uri' => $request->input('image_uri'),
                    'defect_id_parent' => $request->input('defect_id_parent'),
                    'defect_category_id' => $request->input('defect_category_id')
                );

                $defectObject = new Defect();
                $defectObject = $defectObject
                    ->where('id', '=', $request->input('id'))
                    ->where('defect_category_id', '=', $request->input('defect_category_id'))
                    ->first();
                
                $defectObject = $defectObject->update( $dataArray );
                unset($dataArray);
                $data['defect_object'] = $defectObject;

                unset($dataArray);
                // Commit transaction!
                DB::commit();
            }catch(Exception $e){
                // Rollback transaction!
                DB::rollback(); 
                //return redirect()->back()->withInput();
                return (new CommonResponseResource( $data ))->additional(array(
                    'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
                ));
            }
        }
        
        //unset data
        unset( $dataArray );
        unset( $rules );
        unset( $date_today );
        unset( $current_user );
        //unset( $data );
        
        //return Response::json( $data );
        //return redirect()->back();
        //$http_response_code = http_response_code();
        return (new CommonResponseResource( $data ))->additional(array(
            'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_OK]
        ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        
        // validate the info, create rules for the inputs
        $rules = array(
            'id' => 'required|exists:defects,id',
            'defect_category_id' => 'required|exists:defects,defect_category_id'
        );
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            //return redirect()->back()->withErrors($validator)->withInput();
            $data['message_error'] = $validator->errors()->first();
            return (new CommonResponseResource( $data ))->additional(array(
                'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
            ));
        } else {
            // do process
            try {
                // Start transaction!
                DB::beginTransaction();
                
                $defectObject = new Defect();
                $defectObject = $defectObject
                    ->where('id', '=', $request->input('id'))
                    ->where('defect_category_id', '=', $request->input('defect_category_id'))
                    ->first();
                $defectObject->delete();
                
                $data['defect_object'] = $defectObject;
                unset($dataArray);
                
                // Commit transaction!
                DB::commit();
            }catch(Exception $e){
                // Rollback transaction!
                DB::rollback(); 
                //return redirect()->back()->withInput();
                return (new CommonResponseResource( $data ))->additional(array(
                    'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
                ));
            }
        }
        
        //unset data
        unset( $dataArray );
        unset( $rules );
        unset( $date_today );
        unset( $current_user );
        //unset( $data );
        
        //return Response::json( $data );
        //return redirect()->back();
        //$http_response_code = http_response_code();
        return (new CommonResponseResource( $data ))->additional(array(
            'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_OK]
        ));
    }
    
    //other
    public function selectAllDefects(Request $request){
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
            $data['message_error'] = $validator->errors()->first();
            return (new CommonResponseResource( $data ))->additional(array(
                'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
            ));
        } else {
            // do process
            try {
                // Start transaction!
                //DB::beginTransaction();
                //DB::transaction(function () use (&$data){});
                $defectObject = new Defect();
                $query = $defectObject;
                /*
                $query = $company->where('is_visible', '=', true);
                $query = $company->where('is_active', '=', true);
                */
                //$query = $query->where('is_visible', '=', $request->input('is_visible', true));
                //$query = $query->where('is_active', '=', $request->input('is_visible', true));
                // is_visible
                if( ($request->has('is_visible')) && ($request->filled('is_visible')) ){
                    $is_visible_val_true = "true";
                    $is_visible_val_false = "false";
                    $is_visible_val_temp = $request->input('is_visible');
                    if( (strcasecmp($is_visible_val_temp, $is_visible_val_true) == 0) ){
                        $query = $query->where('is_visible', '=', true);
                    }else if( (strcasecmp($is_visible_val_temp, $is_visible_val_false) == 0) ){
                        $query = $query->where('is_visible', '=', false);
                    }else{
                        $query = $query->where('is_visible', '=', true);
                    }
                }else{
                    $query = $query->where('is_visible', '=', true);
                }
                
                // is_active
                if( ($request->has('is_active')) && ($request->filled('is_active')) ){
                    $is_active_val_true = "true";
                    $is_active_val_false = "false";
                    $is_active_val_temp = $request->input('is_active');
                    if( (strcasecmp($is_active_val_temp, $is_active_val_true) == 0) ){
                        $query = $query->where('is_active', '=', true);
                    }else if( (strcasecmp($is_active_val_temp, $is_active_val_false) == 0) ){
                        $query = $query->where('is_active', '=', false);
                    }else{
                        $query = $query->where('is_active', '=', true);
                    }
                }else{
                    $query = $query->where('is_active', '=', true);
                }
                
                $recordsTotal = $query->count();
                $recordsFiltered = $recordsTotal;
                
                // get search query value
                if( ($request->has('search')) && ($request->filled('search')) ){
                    $search = $request->input('search');
                    if( $search && (@key_exists('value', $search)) ){
                        $search = $search['value'];
                    }
                    if($search && (!empty($search))){
                        //$search = (string) $search;
                        $query = $query->where('code', 'like', '%' . $search . '%');
                    }
                }
                
                // created_at
                if( ($request->has('created_at')) && ($request->filled('created_at')) ){
                    $created_at = $request->input('created_at');
                    $query = $query->where('created_at', '=', $created_at);
                }
                
                // updated_at
                if( ($request->has('updated_at')) && ($request->filled('updated_at')) ){
                    $updated_at = $request->input('updated_at');
                    $query = $query->where('updated_at', '=', $updated_at);
                }
                
                // id
                if( ($request->has('id')) && ($request->filled('id')) ){
                    $id = $request->input('id');
                    $query = $query->where('id', '=', $id);
                }
                
                // colour_id
                if( ($request->has('colour_id')) && ($request->filled('colour_id')) ){
                    $colour_id = $request->input('colour_id');
                    $query = $query->where('colour_id', '=', $colour_id);
                }
                
                // code
                if( ($request->has('code')) && ($request->filled('code')) ){
                    $code = $request->input('code');
                    $query = $query->where('code', '=', $code);
                }
                
                // name
                if( ($request->has('name')) && ($request->filled('name')) ){
                    $name = $request->input('name');
                    $query = $query->where('name', '=', $name);
                }
                
                // display_name
                if( ($request->has('display_name')) && ($request->filled('display_name')) ){
                    $display_name = $request->input('display_name');
                    $query = $query->where('display_name', '=', $display_name);
                }
                
                // image_uri
                if( ($request->has('image_uri')) && ($request->filled('image_uri')) ){
                    $image_uri = $request->input('image_uri');
                    $query = $query->where('image_uri', '=', $image_uri);
                }
                
                // defect_id_parent
                if( ($request->has('defect_id_parent')) && ($request->filled('defect_id_parent')) ){
                    $defect_id_parent = $request->input('defect_id_parent');
                    $query = $query->where('defect_id_parent', '=', $defect_id_parent);
                }
                
                // defect_category_id
                if( ($request->has('defect_category_id')) && ($request->filled('defect_category_id')) ){
                    $defect_category_id = $request->input('defect_category_id');
                    $query = $query->where('defect_category_id', '=', $defect_category_id);
                }

                // get filtered record count
                $recordsFiltered = $query->count();

                // get limit value
                if( ($request->has('length')) && ($request->filled('length')) ){
                    $length = intval( $request->input('length') );
                    $length = abs( $length );
                    $query = $query->limit($length);
                }
                // set default value for length (PHP_INT_MAX)
                if( $length <= 0 ){
                    $length = PHP_INT_MAX;
                    $length = abs( $length );
                    //$length = 0;
                }

                // get offset value
                if( ($request->has('start')) && ($request->filled('start')) ){
                    $start = intval( $request->input('start') );
                    $start = abs( $start );
                }else if( ($request->has('page')) && ($request->filled('page')) ){
                    $start = intval( $request->input('page') );
                    //$start = abs( ( ( $start - 1 ) * $length ) );
                    $start = ( ( $start - 1 ) * $length );
                    $start = abs( $start );
                }

                // filter with offset value
                if( $start > 0 ){
                    //$query = $query->limit($length)->skip($start);
                    $query = $query->limit($length)->offset($start);
                }else if( $length > 0 ){
                    $query = $query->limit($length);
                }

                // order
                //$query->orderBy('id', 'desc');
                $query->orderBy('updated_at', 'desc');

                // get data
                $queryResult = $query->get();

                $recordsTotal = $recordsFiltered;
                
                $draw = $request->input('draw');
                
                $data = array(
                    'draw' => $draw,
                    'start' => $start,
                    'page' => $start,
                    'length' => $length,
                    'search' => $search,
                    'recordsTotal' => $recordsTotal,
                    'recordsFiltered' => $recordsFiltered,
                    'data' => $queryResult,
                    'pagination' => array(
                        'more' => ( ($start * $length) < $recordsFiltered ) ? true : false
                    )
                );

                // Commit transaction!
                //DB::commit();
                //return Response::json( $data );
            }catch(Exception $e){
                // Rollback transaction!
                //DB::rollback(); 
                //return redirect()->back()->withInput();
                return (new CommonResponseResource( $data ))->additional(array(
                    'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
                ));
            }
        }
        
        //unset data
        unset( $dataArray );
        unset( $rules );
        unset( $date_today );
        unset( $current_user );
        //unset( $data );
        
        //return Response::json( $data );
        //return redirect()->back();
        //$http_response_code = http_response_code();
        return (new CommonResponseResource( $data ))->additional(array(
            'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_OK]
        ));
    }
    
}
