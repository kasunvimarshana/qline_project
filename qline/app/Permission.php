<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Role;

class Permission extends Model
{
    //
    protected $table = "permissions";
    protected $primaryKey = "id";
    //protected $keyType = 'int';
    //public $incrementing = false;
    //protected $connection = "mysql";
    //$this->setConnection("mysql");
    
    protected $attributes = array();
    protected $fillable = array('slug', 'name');
    //protected $hidden = array();
    //protected $casts = array();
    
    //many to many
    public function roles() {
        return $this->belongsToMany(Role::class, 'role_permissions', 'permission_id', 'role_id');
    }
}