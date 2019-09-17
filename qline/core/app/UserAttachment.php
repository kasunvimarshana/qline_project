<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAttachment extends Model
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
    protected $fillable = array('id', 'is_visible', 'is_active', 'attached_by', 'file_original_name', 'file_type', 'link_url', 'attachable_type', 'attachable_id');
    //protected $hidden = array();
    //protected $casts = array();
    
    //one to many (inverse)
    public function userAttachedBy(){
        return $this->belongsTo('App\User', 'attached_by', 'id');
    }
    
    //one to many (polymorphic) (inverse)
    public function attachable(){
        //return $this->morphTo();
        return $this->morphTo('attachable', 'attachable_type', 'attachable_id');
    }
    
}
