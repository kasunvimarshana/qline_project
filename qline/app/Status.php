<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Status extends Model
{
    //
    //protected $table = "table";
    //protected $primaryKey = "id";
    //protected $keyType = 'int';
    //public $incrementing = false;
    //protected $connection = "mysql";
    //$this->setConnection("mysql");
    
    //protected $attributes = array();
    //protected $guarded = array();
    //protected $fillable = array();
    //protected $hidden = array();
    //protected $casts = array();
    
    protected static function boot(){
        parent::boot();
        
        static::creating(function( $model ){
            //$model->{ $model->getKeyName() } = (string) Str::uuid()->toString();
        });
    }
    
    /*
    public function getIncrementing(){
        return $this->incrementing;
    }
    */
    
    /*
    public function getKeyType(){
        return $this->keyType;
    }
    */
}
