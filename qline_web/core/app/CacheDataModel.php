<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Session as Session;

class CacheDataModel extends Model
{
    //
    const PREFIX_VAL = self::class . "_";
    
    function __construct(){}
    
    public function __toString(){
        //return Model::class;
        //return self::class;
        return get_class($this);
    }
    
    public static function setData($key, $value){
        $key = self::PREFIX_VAL . $key;
        Session::put($key, $value);
    }
    
    public static function getData($key){
        $key = self::PREFIX_VAL . $key;
        return Session::get($key, null);
    }
    
    public static function flushData(){
        Session::flush();
    }
}
