<?php

namespace App\Http\Controllers;

use App\Colour;
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

class ColourController extends Controller
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
     * @param  \App\Colour  $colour
     * @return \Illuminate\Http\Response
     */
    public function show(Colour $colour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Colour  $colour
     * @return \Illuminate\Http\Response
     */
    public function edit(Colour $colour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Colour  $colour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Colour $colour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Colour  $colour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colour $colour)
    {
        //
    }
}
