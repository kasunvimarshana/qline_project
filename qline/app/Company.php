<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    //protected $table = "table";
    protected $primaryKey = "name";
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
    protected $fillable = array('is_visible', 'colour', 'name', 'display_name', 'image_uri', 'company_id_parent');
    //protected $hidden = array();
    //protected $casts = array();
    
    //one to many (inverse)
    public function companyParent(){
        return $this->belongsTo('App\Company', 'company_id_parent', 'name');
    }
    
    //one to many
    public function companyChildren(){
        return $this->hasMany('App\Company', 'company_id_parent', 'name');
    }
    
    //one to many
    public function departments(){
        return $this->hasMany('App\Department', 'company_id', 'name');
    }
    
    //one to many
    public function factories(){
        return $this->hasMany('App\Factory', 'company_id', 'name');
    }
    
    //one to many
    public function customers(){
        return $this->hasMany('App\Customer', 'company_id', 'name');
    }
    
    //one to many
    public function styles(){
        return $this->hasMany('App\Style', 'company_id', 'name');
    }
    
    /*
    //one to many (polymorphic)
    public function userAttachments(){
        return $this->morphMany('App\UserAttachment', 'attachable', 'attachable_type', 'attachable_id', 'name');
    }
    */
    
}
