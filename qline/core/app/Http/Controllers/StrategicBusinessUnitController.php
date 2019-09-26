<?php

namespace App\Http\Controllers;

use App\StrategicBusinessUnit;
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

class StrategicBusinessUnitController extends Controller
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
     * @param  \App\StrategicBusinessUnit  $strategicBusinessUnit
     * @return \Illuminate\Http\Response
     */
    public function show(StrategicBusinessUnit $strategicBusinessUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StrategicBusinessUnit  $strategicBusinessUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(StrategicBusinessUnit $strategicBusinessUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StrategicBusinessUnit  $strategicBusinessUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StrategicBusinessUnit $strategicBusinessUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StrategicBusinessUnit  $strategicBusinessUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(StrategicBusinessUnit $strategicBusinessUnit)
    {
        //
    }
}
