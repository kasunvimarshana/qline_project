<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogCategory extends Model
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
    protected $fillable = array('id', 'is_visible', 'is_active', 'code', 'name', 'display_name', 'image_uri', 'log_category_id_parent');
    //protected $hidden = array();
    //protected $casts = array();
    
    //one to many (inverse)
    public function logCategoryParent(){
        return $this->belongsTo('App\LogCategory', 'log_category_id_parent', 'id');
    }
    
    //one to many
    public function logCategoryChildren(){
        return $this->hasMany('App\LogCategory', 'log_category_id_parent', 'id');
    }
    
}
