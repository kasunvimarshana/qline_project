<?php

namespace App\Http\Controllers;

use App\QualityRecordCutting;
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

class QualityRecordCuttingController extends Controller
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QualityRecordCutting  $qualityRecordCutting
     * @return \Illuminate\Http\Response
     */
    public function show(QualityRecordCutting $qualityRecordCutting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QualityRecordCutting  $qualityRecordCutting
     * @return \Illuminate\Http\Response
     */
    public function edit(QualityRecordCutting $qualityRecordCutting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QualityRecordCutting  $qualityRecordCutting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QualityRecordCutting $qualityRecordCutting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QualityRecordCutting  $qualityRecordCutting
     * @return \Illuminate\Http\Response
     */
    public function destroy(QualityRecordCutting $qualityRecordCutting)
    {
        //
    }
}
