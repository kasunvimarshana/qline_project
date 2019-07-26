<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    //
    protected $table = "role_permissions";
    protected $primaryKey = "id";
    //protected $keyType = 'int';
    //public $incrementing = false;
    //protected $connection = "mysql";
    //$this->setConnection("mysql");
    
    //protected $attributes = array();
    //protected $guarded = array();
    protected $fillable = array('role_id', 'permission_id');
    //protected $hidden = array();
    //protected $casts = array();
    
}