<!-- ------------------------------------------------------------------- -->
<?php

$ship = new Ship;
$ship->name = 'Enterprise';
$ship->registry = 'ncc-1701D';

$captain = new Captain;
$captain->name = 'jean Luc Picard';

DB::transaction(function() use ($ship, $captain) {
   $ship = $ship->save(); //Ship Exists First
   Ship::find($ship->id)->captain()->save($captain);//Captain is saved to existing ship
});

?>
<!-- ------------------------------------------------------------------- -->