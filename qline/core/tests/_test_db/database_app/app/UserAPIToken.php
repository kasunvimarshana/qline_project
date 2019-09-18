<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserAPIToken extends Model
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
    protected $fillable = array('id', 'is_visible', 'is_active', 'is_deactivatable', 'is_notifiable', 'access_token', 'refresh_token', 'code_active', 'ip_address', 'active_role', 'time_create', 'time_active', 'time_deactive', 'duration_active', 'time_last_activity', 'user_agent', 'user_id');
    //protected $hidden = array();
    //protected $casts = array();
    
    protected static function boot(){
        parent::boot();
        
        static::creating(function( $model ){
            $model->access_token = $model->generateAPIToken();
        });
    }
    
    //one to many (inverse)
    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    
    //one to many
    public function userAPITokenDatas(){
        return $this->hasMany('App\UserAPITokenData', 'user_a_p_i_token_id', 'id');
    }
    
    public static function generateAPIToken(){
        $plainToken = bin2hex( time() . '-' . Str::uuid()->toString() );
        return $plainToken;
    }
    
}