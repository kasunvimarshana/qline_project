<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AQLStandardData extends Model
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
    protected $fillable = array('is_visible', 'a_q_l_standard_id');
    //protected $hidden = array();
    //protected $casts = array();
    
    //one to many (inverse)
    public function aQlStandard(){
        return $this->belongsTo('App\AQLStandard', 'a_q_l_standard_id', 'name');
    }
}
