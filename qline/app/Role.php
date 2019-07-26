<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Permission;

class Role extends Model
{
    //
    protected $table = "roles";
    protected $primaryKey = "id";
    //protected $keyType = 'int';
    //public $incrementing = false;
    //protected $connection = "mysql";
    //$this->setConnection("mysql");
    
    protected $attributes = array();
    //protected $guarded = array();
    //protected $fillable = array('slug', 'name');
    //protected $hidden = array();
    //protected $casts = array();
    
    //many to many
    public function permissions() {
        return $this->belongsToMany(Permission::class, 'role_permissions', 'role_id', 'permission_id');
    }
}