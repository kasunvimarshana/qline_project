<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    //
    protected $table = "user_roles";
    protected $primaryKey = "id";
    //protected $keyType = 'int';
    //public $incrementing = false;
    //protected $connection = "mysql";
    //$this->setConnection("mysql");
    
    //protected $attributes = array();
    protected $fillable = array('user_id', 'role_id');
    //protected $hidden = array();
    //protected $casts = array();
}