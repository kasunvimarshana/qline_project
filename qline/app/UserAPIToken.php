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
    
    //protected $attributes = array();
    //protected $guarded = array();
    protected $fillable = array('is_visible', 'is_active', 'is_deactivatable', 'is_notifiable', 'access_token', 'refresh_token', 'code_active', 'ip_address_request', 'active_role', 'time_generate', 'time_active', 'time_deactive', 'duration_active', 'user_id');
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
        return $this->belongsTo('App\User', 'user_id', 'user_code');
    }
    
    public static function generateAPIToken(){
        $plainToken = bin2hex( time() . '-' . Str::uuid()->toString() );
        return $plainToken;
    }
    
}