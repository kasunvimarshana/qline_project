<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SewingCheckStandardData extends Model
{
    //
    //protected $table = "table";
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
    protected $fillable = array('id', 'is_visible', 'is_active', 'count_sample', 'batch_count_min', 'batch_count_max', 'count_accept', 'count_reject', 'reject_level', 'reject_mode', 'accept_level', 'accept_mode', 'audit_frequency_count', 'audit_frequency_time', 'sewing_check_standard_id');
    //protected $hidden = array();
    //protected $casts = array();
    
    //one to many (inverse)
    public function sewingCheckStandard(){
        return $this->belongsTo('App\SewingCheckStandard', 'sewing_check_standard_id', 'id');
    }
}
