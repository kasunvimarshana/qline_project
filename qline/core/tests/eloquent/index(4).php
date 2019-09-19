<!-- ------------------------------------------------------------------------- -->
<?php

return $this->belongsToMany( 'App\Models\Cafe', 'cafes_brew_methods', 'brew_method_id', 'cafe_id' );

?>
<!-- ------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------- -->
<?php

//Configure Cafes to have many Brew Methods
public function brewMethods(){
  return $this->belongsToMany( 'App\Models\BrewMethod', 'cafes_brew_methods', 'cafe_id', 'brew_method_id' );
}

?>
<!-- ------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------- -->
<?php

/*
Moreover, you can specify the actual field names of that pivot table, if they are different than default product_id and shop_id. Then just add two more parameters – first, the current model field, and then the field of the model being joined:
*/
public function products()
{
    return $this->belongsToMany('App\Product', 'products_shops', 'shops_id', 'products_id');
}

?>
<!-- ------------------------------------------------------------------------- -->