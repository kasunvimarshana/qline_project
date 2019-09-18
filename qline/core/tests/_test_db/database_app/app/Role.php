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
    //protected $perPage = 25;
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';
    //public $timestamps = false;
    
    //protected $dates = array('created_at', 'updated_at', 'deleted_at');
    //protected $appends = array('field1', 'field2');
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