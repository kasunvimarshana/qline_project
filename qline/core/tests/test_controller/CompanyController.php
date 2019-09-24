<?php

namespace App\Http\Controllers;

use App\Company;
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

use App\Http\Resources\CommonResponseResource as CommonResponseResource;
use App\Enums\HTTPStatusCodeEnum as HTTPStatusCodeEnum;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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
            'code'    => 'required|unique:companies,code'
        );
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            //return redirect()->back()->withErrors($validator)->withInput();
            $data['message_error'] = $validator->errors()->first();
            return (new CommonResponseResource( $data ))->additional(array(
                'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_UNPROCESSABLE_ENTITY]
            ));
        } else {
            // do process
            try {
                // Start transaction!
                DB::beginTransaction();
                /*
                DB::transaction(function () use (&$data, $request, $dataArray, $date_today, $current_user){
                    $dataArray = array(
                        'is_visible' => $request->input('is_visible', true),
                        'is_active' => $request->input('is_active', true),
                        'colour_id' => $request->input('colour_id'),
                        'code' => $request->input('code'),
                        'name' => $request->input('name'),
                        'display_name' => $request->input('display_name'),
                        'image_uri' => $request->input('image_uri'),
                        'company_id_parent' => $request->input('company_id_parent')
                    );
                    
                    $newCompany = Company::create( $dataArray );
                    unset($dataArray);
                    $data['company_new'] = $newCompany;
                    
                    unset($dataArray);
                });
                */
                
                $dataArray = array(
                    'is_visible' => $request->input('is_visible', true),
                    'is_active' => $request->input('is_active', true),
                    'colour_id' => $request->input('colour_id'),
                    'code' => $request->input('code'),
                    'name' => $request->input('name'),
                    'display_name' => $request->input('display_name'),
                    'image_uri' => $request->input('image_uri'),
                    'company_id_parent' => $request->input('company_id_parent')
                );

                $newCompany = Company::create( $dataArray );
                unset($dataArray);
                $data['company_new'] = $newCompany;

                unset($dataArray);
                // Commit transaction!
                DB::commit();
            }catch(Exception $e){
                // Rollback transaction!
                DB::rollback(); 
                //return redirect()->back()->withInput();
                return (new CommonResponseResource( $data ))->additional(array(
                    'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_UNPROCESSABLE_ENTITY]
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
            'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_CREATED]
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    /*
    public function show(Company $company)
    {
        //
    }
    */
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
        $rules = array();
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            //return redirect()->back()->withErrors($validator)->withInput();
            $data['message_error'] = $validator->errors()->first();
            return (new CommonResponseResource( $data ))->additional(array(
                'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_UNPROCESSABLE_ENTITY]
            ));
        } else {
            // do process
            try {
                // Start transaction!
                DB::beginTransaction();
                
                $company = new Company();
                $company = $company->where('id', '=', $request->input('id'))->first();
                
                $data['company_object'] = $company;
                unset($dataArray);
                
                // Commit transaction!
                DB::commit();
            }catch(Exception $e){
                // Rollback transaction!
                DB::rollback(); 
                //return redirect()->back()->withInput();
                return (new CommonResponseResource( $data ))->additional(array(
                    'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_UNPROCESSABLE_ENTITY]
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
            'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_CREATED]
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company, Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    /*
    public function update(Request $request, Company $company)
    {
        //
    }
    */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
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
            'code'    => 'required'
        );
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            //return redirect()->back()->withErrors($validator)->withInput();
            $data['message_error'] = $validator->errors()->first();
            return (new CommonResponseResource( $data ))->additional(array(
                'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_UNPROCESSABLE_ENTITY]
            ));
        } else {
            // do process
            try {
                // Start transaction!
                DB::beginTransaction();
                /*
                DB::transaction(function () use (&$data, $request, $dataArray, $date_today, $current_user){
                    $dataArray = array(
                        'is_visible' => $request->input('is_visible', true),
                        'is_active' => $request->input('is_active', true),
                        'colour_id' => $request->input('colour_id'),
                        'code' => $request->input('code'),
                        'name' => $request->input('name'),
                        'display_name' => $request->input('display_name'),
                        'image_uri' => $request->input('image_uri'),
                        'company_id_parent' => $request->input('company_id_parent')
                    );
                    
                    $newCompany = Company::create( $dataArray );
                    unset($dataArray);
                    $data['company_new'] = $newCompany;
                    
                    unset($dataArray);
                });
                */
                
                $dataArray = array(
                    'is_visible' => $request->input('is_visible', true),
                    'is_active' => $request->input('is_active', true),
                    'colour_id' => $request->input('colour_id'),
                    'code' => $request->input('code'),
                    'name' => $request->input('name'),
                    'display_name' => $request->input('display_name'),
                    'image_uri' => $request->input('image_uri'),
                    'company_id_parent' => $request->input('company_id_parent')
                );

                $newCompany = Company::create( $dataArray );
                unset($dataArray);
                $data['company_new'] = $newCompany;

                unset($dataArray);
                // Commit transaction!
                DB::commit();
            }catch(Exception $e){
                // Rollback transaction!
                DB::rollback(); 
                //return redirect()->back()->withInput();
                return (new CommonResponseResource( $data ))->additional(array(
                    'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_UNPROCESSABLE_ENTITY]
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
            'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_CREATED]
        ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    /*
    public function destroy(Company $company)
    {
    }
    */
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
        $rules = array();
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            //return redirect()->back()->withErrors($validator)->withInput();
            $data['message_error'] = $validator->errors()->first();
            return (new CommonResponseResource( $data ))->additional(array(
                'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_UNPROCESSABLE_ENTITY]
            ));
        } else {
            // do process
            try {
                // Start transaction!
                DB::beginTransaction();
                
                $company = new Company();
                $company = $company->where('id', '=', $request->input('id'))->first();
                
                $data['company_object'] = $company;
                unset($dataArray);
                
                // Commit transaction!
                DB::commit();
            }catch(Exception $e){
                // Rollback transaction!
                DB::rollback(); 
                //return redirect()->back()->withInput();
                return (new CommonResponseResource( $data ))->additional(array(
                    'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_UNPROCESSABLE_ENTITY]
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
            'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_CREATED]
        ));
    }
    
    //other
    public function selectCompanies(Request $request){
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
                'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_UNPROCESSABLE_ENTITY]
            ));
        } else {
            // do process
            try {
                // Start transaction!
                //DB::beginTransaction();
                //DB::transaction(function () use (&$data){});
                $company = new Company();
                /*
                $query = $company->where('is_visible', '=', true);
                $query = $company->where('is_active', '=', true);
                */
                $query = $company->where('is_visible', '=', $request->input('is_visible', true));
                $query = $company->where('is_active', '=', $request->input('is_visible', true));
                
                $recordsTotal = $query->count();
                $recordsFiltered = $recordsTotal;

                $draw = $request->input('draw');
                
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
                    'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_UNPROCESSABLE_ENTITY]
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
            'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_CREATED]
        ));
    }
}
