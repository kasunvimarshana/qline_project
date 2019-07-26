<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    //
    protected $table = "user_permissions";
    protected $primaryKey = "id";
    //protected $keyType = 'int';
    //public $incrementing = false;
    //protected $connection = "mysql";
    //$this->setConnection("mysql");
    
    protected $attributes = array();
    //protected $guarded = array();
    protected $fillable = array('user_id', 'permission_id');
    //protected $hidden = array();
    //protected $casts = array();
}