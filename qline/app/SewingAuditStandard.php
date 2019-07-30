<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SewingAuditStandard extends Model
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
    protected $fillable = array('is_visible', 'colour', 'name', 'display_name', 'image_uri', 'sewing_audit_standard_id_parent', 'a_q_l_standard_id');
    //protected $hidden = array();
    //protected $casts = array();
    
    //one to many (inverse)
    public function sewingAuditStandardParent(){
        return $this->belongsTo('App\SewingAuditStandard', 'sewing_audit_standard_id_parent', 'name');
    }
    
    //one to many
    public function sewingAuditStandardChildren(){
        return $this->hasMany('App\SewingAuditStandard', 'sewing_audit_standard_id_parent', 'name');
    }
    
    //one to many (inverse)
    public function aQLStandard(){
        return $this->belongsTo('App\AQLStandard', 'a_q_l_standard_id', 'name');
    }
    
    //one to many
    public function sewingAuditStandardDatas(){
        return $this->hasMany('App\SewingAuditStandardData', 'sewing_audit_standard_id', 'name');
    }
    
}
