<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogLevel extends Model
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
    protected $fillable = array('id', 'is_visible', 'is_active', 'code', 'name', 'display_name', 'image_uri', 'log_level_id_parent');
    //protected $hidden = array();
    //protected $casts = array();
    
    //one to many (inverse)
    public function logLevelParent(){
        return $this->belongsTo('App\LogLevel', 'log_level_id_parent', 'id');
    }
    
    //one to many
    public function logLevelChildren(){
        return $this->hasMany('App\LogLevel', 'log_level_id_parent', 'id');
    }
    
}
