<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionStage extends Model
{
    //
    //protected $table = "table";
    protected $primaryKey = "name";
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
    protected $fillable = array('is_visible', 'colour', 'name', 'display_name', 'image_uri', 'inspection_stage_id_parent');
    //protected $hidden = array();
    //protected $casts = array();
    
    //one to many (inverse)
    public function inspectionStageParent(){
        return $this->belongsTo('App\InspectionStage', 'inspection_stage_id_parent', 'name');
    }
    
    //one to many
    public function inspectionStageChildren(){
        return $this->hasMany('App\InspectionStage', 'inspection_stage_id_parent', 'name');
    }
}
