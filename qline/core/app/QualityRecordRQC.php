<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QualityRecordRQC extends Model
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
    protected $fillable = array('id', 'is_visible', 'is_active', 'time_create', 'count_sample', 'inspection_stage_id', 'standard_a_q_l_id', 'company_id', 'strategic_business_unit_id', 'factory_id', 'line_id', 'customer_id', 'style_id', 'colour_id', 'export_id', 'user_id_create', 'ip_address', 'status_id', 'description', 'user_id_record');
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
    
    //one to many
    public function qualityRecordDataRQC(){
        return $this->hasMany('App\QualityRecordDataRQC', 'quality_record_r_q_c_id', 'id');
    }
}
