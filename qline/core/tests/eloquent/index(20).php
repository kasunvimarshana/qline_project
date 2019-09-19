<!-- ---------------------------------------------------------------------- -->
<?php

public function products()
{
    return $this->belongsToMany('App\Product')
    	->withPivot('products_amount', 'price')
    	->withTimestamps();
}

?>
<!-- ---------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------- -->
<?php

public function categories()
  {
      return $this->belongsToMany('App\Category')
        ->withPivot('description')
        ->withTimestamps();
  }

?>
<!-- ---------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------- -->
<?php

$list = Todolist::find(2);
$list->categories()->attach(
  [3 => ['description' => 'Because San Juan is a tropical island']]
);

?>
<!-- ---------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------- -->
<?php

$list->categories()->updateExistingPivot(3, 
  ['description' => 'Sun, beaches and rum!']
);

?>
<!-- ---------------------------------------------------------------------- -->