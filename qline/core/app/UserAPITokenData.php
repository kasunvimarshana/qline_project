<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAPITokenData extends Model
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
    protected $fillable = array('id', 'is_visible', 'is_active', 'data_key', 'data_value', 'user_a_p_i_token_id');
    //protected $hidden = array();
    //protected $casts = array();
    
    //one to many (inverse)
    public function userAPIToken(){
        return $this->belongsTo('App\UserAPIToken', 'user_a_p_i_token_id', 'id');
    }
    
}
