<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    //
    //protected $table = "table";
    protected $primaryKey = "id";
    protected $keyType = 'string';
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
    protected $fillable = array('id', 'is_visible', 'is_active', 'colour_id', 'code', 'name', 'display_name', 'image_uri', 'line_id_parent', 'company_id', 'strategic_business_unit_id', 'factory_id');
    //protected $hidden = array();
    //protected $casts = array();
    
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
    public function lineParent(){
        return $this->belongsTo('App\Line', 'line_id_parent', 'id');
    }
    
    //one to many
    public function lineChildren(){
        return $this->hasMany('App\Line', 'line_id_parent', 'id');
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
    public function factory(){
        return $this->belongsTo('App\Factory', 'factory_id', 'id');
    }
}
