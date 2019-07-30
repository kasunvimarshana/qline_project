<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colour extends Model
{
    //
    //protected $table = "table";
    protected $primaryKey = "colour_code";
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
    protected $fillable = array('is_visible', 'is_active', 'colour_code', 'colour_value', 'name', 'display_name', 'image_uri');
    //protected $hidden = array();
    //protected $casts = array();
}
