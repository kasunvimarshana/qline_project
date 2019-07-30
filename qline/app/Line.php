<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Line extends Model
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
    protected $fillable = array('is_visible', 'colour', 'name', 'display_name', 'image_uri', 'line_id_parent', 'factory_id');
    //protected $hidden = array();
    //protected $casts = array();
    
    //one to many (inverse)
    public function lineParent(){
        return $this->belongsTo('App\Line', 'line_id_parent', 'name');
    }
    
    //one to many
    public function lineChildren(){
        return $this->hasMany('App\Line', 'line_id_parent', 'name');
    }
    
    //one to many (inverse)
    public function factory(){
        return $this->belongsTo('App\Factory', 'factory_id', 'name');
    }
}
