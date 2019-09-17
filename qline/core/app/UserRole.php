<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;

class UserRole extends Model
{
    //
    protected $table = "user_roles";
    protected $primaryKey = array('user_id', 'role_id');
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
    protected $fillable = array('user_id', 'role_id');
    //protected $hidden = array();
    //protected $casts = array();
    
    /**
    * Set the keys for a save update query.
    * This is a fix for tables with composite keys
    * TODO: Investigate this later on
    *
    * @param  \Illuminate\Database\Eloquent\Builder  $query
    * @return \Illuminate\Database\Eloquent\Builder
    */
    /*
    protected function setKeysForSaveQuery(Builder $query){
        $query
        //Put appropriate values for your keys here:
        ->where('column1', '=', $this->column1)
        ->where('column2', '=', $this->column2);
        return $query;
    }
    */
    protected function setKeysForSaveQuery(Builder $query){
        if (is_array($this->primaryKey)) {
            foreach ($this->primaryKey as $key => $value) {
                //$this->original($value);
                $query->where($value, '=', $this->original[$value]);
            }
            return $query;
        }else{
            return parent::setKeysForSaveQuery($query);
        }
    }
    
}