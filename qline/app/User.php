<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Permissions\HasPermissionsTrait;

class User extends Authenticatable
{
    use Notifiable;
    //
    use HasPermissionsTrait;
    
    //protected $table = "table";
    protected $primaryKey = "user_code";
    protected $keyType = 'string';
    public $incrementing = false;
    //protected $connection = "mysql";
    //$this->setConnection("mysql");
    //protected $guard = 'guard';//the authentication guard
    //protected $perPage = 25;
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';
    //public $timestamps = false;
    
    //protected $dates = array('created_at', 'updated_at', 'deleted_at');
    //protected $appends = array('field1', 'field2');
    //protected $attributes = array();
    //protected $guarded = array();
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('is_visible', 'is_active', 'user_code', 'epf_code', 'name_first', 'name_last', 'phone_mobile', 'password', 'remember_token', 'display_name', 'image_uri', 'company_id', 'department_id', 'section_id');

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    //one to many
    public function userAPITokens(){
        return $this->hasMany('App\UserAPIToken', 'user_id', 'user_code');
    }
    
}
