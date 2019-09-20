<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;

class StrategicBusinessUnit extends Model
{
    //
    //protected $table = "table";
    protected $primaryKey = array('id', 'company_id');
    //protected $primaryKey = "id";
    //protected $keyType = 'string';
    public $incrementing = false;
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
    protected $fillable = array('id', 'is_visible', 'is_active', 'colour_id', 'code', 'name', 'display_name', 'image_uri', 'strategic_business_unit_id_parent', 'company_id');
    //protected $hidden = array();
    //protected $casts = array();
    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    //protected $touches = ['table_name'];
    /**
    * Set the keys for a save update query.
    *
    * @param  \Illuminate\Database\Eloquent\Builder  $query
    * @return \Illuminate\Database\Eloquent\Builder
    */
    protected function setKeysForSaveQuery(Builder $query){
        $keys = $this->getKeyName();
        if(!is_array($keys)){
            return parent::setKeysForSaveQuery($query);
        }
        foreach($keys as $keyName){
            $query->where($keyName, '=', $this->getKeyForSaveQuery($keyName));
        }
        return $query;
    }
    
    /**
    * Get the primary key value for a save query.
    *
    * @param mixed $keyName
    * @return mixed
    */
    protected function getKeyForSaveQuery($keyName = null){
        if(is_null($keyName)){
            $keyName = $this->getKeyName();
        }
        if (isset($this->original[$keyName])){
            return $this->original[$keyName];
        }
        return $this->getAttribute($keyName);
    }
    
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
    
    //one to many (inverse)
    public function strategicBusinessUnitParent(){
        return $this->belongsTo('App\StrategicBusinessUnit', 'strategic_business_unit_id_parent', 'id');
    }
    
    //one to many
    public function strategicBusinessUnitChildren(){
        return $this->hasMany('App\StrategicBusinessUnit', 'strategic_business_unit_id_parent', 'id');
    }
    
    //one to many (inverse)
    public function company(){
        return $this->belongsTo('App\Company', 'company_id', 'id');
    }
    
    //one to many
    public function departments(){
        return $this->hasMany('App\Department', 'strategic_business_unit_id', 'id');
    }
    
    //one to many
    public function sections(){
        return $this->hasMany('App\Section', 'strategic_business_unit_id', 'id');
    }
    
    //one to many
    public function factories(){
        return $this->hasMany('App\Factory', 'strategic_business_unit_id', 'id');
    }
    
    //one to many
    public function lines(){
        return $this->hasMany('App\Line', 'starategic_business_unit_id', 'id');
    }
    
    //one to many
    public function users(){
        return $this->hasMany('App\User', 'strategic_business_unit_id', 'id');
    }
    
    //one to many
    public function customers(){
        return $this->hasMany('App\Customer', 'strategic_business_unit_id', 'id');
    }
    
    //one to many
    public function styles(){
        return $this->hasMany('App\Style', 'strategic_business_unit_id', 'id');
    }
    
    /*
    //one to many (polymorphic)
    public function userAttachments(){
        return $this->morphMany('App\UserAttachment', 'attachable', 'attachable_type', 'attachable_id', 'id');
    }
    */
    
}
