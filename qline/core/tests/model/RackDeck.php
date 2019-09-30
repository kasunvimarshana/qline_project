<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;

class RackDeck extends Model
{
    //
    //protected $table = "table";
    //protected $primaryKey = "id";
    //protected $keyType = 'int';
    //public $incrementing = false;
    //protected $connection = "mysql";
    //$this->setConnection("mysql");
    
    protected $fillable = array('rack_id', 'deck_id');
    //protected $hidden = array();
    //protected $casts = array();
    
    //one to many (inverse)
    public function rack(){
        return $this->belongsTo('App\Rack', 'rack_id', 'id');
    }
    
    //one to many (inverse)
    public function deck(){
        return $this->belongsTo('App\Deck', 'deck_id', 'id');
    }
    
}
