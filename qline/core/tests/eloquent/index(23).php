<!-- -------------------------------------------------------------------------------------- -->
<?php

/**
 * All of the relationships to be touched.
 *
 * @var array
 */
//protected $touches = ['table_name'];
/**
* Set the keys for a save update query.
* This is a fix for tables with composite keys
*
* @param  \Illuminate\Database\Eloquent\Builder  $query
* @return \Illuminate\Database\Eloquent\Builder
*/
protected function setKeysForSaveQuery___(Builder $query){
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

?>
<!-- -------------------------------------------------------------------------------------- -->