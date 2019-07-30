<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    //protected $table = "table";
    protected $primaryKey = "customer_code";
    protected $keyType = 'string';
    public $incrementing = false;
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
    protected $fillable = array('is_visible', 'is_active', 'customer_code', 'name', 'display_name', 'image_uri', 'company_id');
    //protected $hidden = array();
    //protected $casts = array();
    
    //one to many (inverse)
    public function company(){
        return $this->belongsTo('App\Company', 'company_id', 'name');
    }
    
    //one to many
    public function styles(){
        return $this->hasMany('App\Style', 'customer_id', 'customer_code');
    }
    
    /*
    //one to many (polymorphic)
    public function userAttachments(){
        return $this->morphMany('App\UserAttachment', 'attachable', 'attachable_type', 'attachable_id', 'customer_code');
    }
    */
    
}
