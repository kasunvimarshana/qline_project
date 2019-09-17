<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SewingCheckStandard extends Model
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
    protected $fillable = array('id', 'is_visible', 'is_active', 'colour_id', 'code', 'name', 'display_name', 'image_uri', 'sewing_check_standard_id_parent', 'a_q_l_standard_id');
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
    public function sewingCheckStandardParent(){
        return $this->belongsTo('App\SewingCheckStandard', 'sewing_check_standard_id_parent', 'id');
    }
    
    //one to many
    public function sewingCheckStandardChildren(){
        return $this->hasMany('App\SewingCheckStandard', 'sewing_check_standard_id_parent', 'id');
    }
    
    //one to many (inverse)
    public function aQLStandard(){
        return $this->belongsTo('App\AQLStandard', 'a_q_l_standard_id', 'id');
    }
    
    //one to many
    public function sewingCheckStandardDatas(){
        return $this->hasMany('App\SewingCheckStandardData', 'sewing_check_standard_id', 'id');
    }
}
