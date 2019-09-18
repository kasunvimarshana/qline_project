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
    protected $primaryKey = "id";
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
    protected $fillable = array('id', 'is_visible', 'is_active', 'code', 'code_epf', 'name_first', 'name_last', 'phone_mobile', 'password', 'display_name', 'image_uri', 'email', 'company_id', 'strategic_business_unit_id', 'department_id', 'section_id', 'grade', 'remember_token');

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
    
    protected static function boot(){
        parent::boot();
        
        static::creating(function( $model ){
            $id = null;
            if( (isset($model->id)) ){
                $id = $model->id;
            }else if( (isset($model->code)) ){
                $id = $model->code;
            }else if( (isset($model->name)) ){
                $id = $model->name;
            }
            $model->id = $id;
        });
    }
    
    //one to many
    public function userAPITokens(){
        return $this->hasMany('App\UserAPIToken', 'user_id', 'id');
    }
    
    //one to many
    public function userAttachments(){
        return $this->hasMany('App\UserAttachment', 'attached_by', 'id');
    }
    
    //one to many (inverse)
    public function company(){
        return $this->belongsTo('App\Company', 'company_id', 'id');
    }
    
    //one to many (inverse)
    public function strategicBusinessUnit(){
        return $this->belongsTo('App\StrategicBusinessUnit', 'strategic_business_unit_id', 'id');
    }
    
    //one to many (inverse)
    public function department(){
        return $this->belongsTo('App\Department', 'department_id', 'id');
    }
    
    //one to many (inverse)
    public function section(){
        return $this->belongsTo('App\Section', 'section_id', 'id');
    }
    
    /*
    //one to many (polymorphic)
    public function userAttachments(){
        return $this->morphMany('App\UserAttachment', 'attachable', 'attachable_type', 'attachable_id', 'id');
    }
    */
    
}
