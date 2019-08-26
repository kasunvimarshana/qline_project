<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
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
    protected $fillable = array('is_visible', 'colour', 'name', 'display_name', 'image_uri', 'department_id_parent', 'company_id');
    //protected $hidden = array();
    //protected $casts = array();
    
    //one to many (inverse)
    public function departmentParent(){
        return $this->belongsTo('App\Department', 'department_id_parent', 'name');
    }
    
    //one to many
    public function departmentChildren(){
        return $this->hasMany('App\Department', 'department_id_parent', 'name');
    }
    
    //one to many (inverse)
    public function company(){
        return $this->belongsTo('App\Company', 'company_id', 'name');
    }
    
    //one to many
    public function sections(){
        return $this->hasMany('App\Section', 'department_id', 'name');
    }
}
