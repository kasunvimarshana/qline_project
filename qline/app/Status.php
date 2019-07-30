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
    //protected $perPage = 25;
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';
    //public $timestamps = false;
    
    //protected $dates = array('created_at', 'updated_at', 'deleted_at');
    //protected $appends = array('field1', 'field2');
    //protected $attributes = array();
    //protected $guarded = array();
    protected $fillable = array('is_visible', 'is_active', 'colour', 'name', 'display_name', 'image_uri');
    //protected $hidden = array();
    //protected $casts = array();
    
    protected static function boot(){
        parent::boot();
        
        static::creating(function( $model ){
            //$model->{ $model->getKeyName() } = (string) Str::uuid()->toString();
        });
    }
    
    /**
    * Get the route key for the model.
    *
    * @return string
    */
    /*
    public function getRouteKeyName()
    {
        return 'id';
    }
    */
    
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
    
    /*
    //one to many (polymorphic)
    public function userAttachments(){
        return $this->morphMany('App\UserAttachment', 'attachable', 'attachable_type', 'attachable_id', 'id');
    }
    */
    
}
