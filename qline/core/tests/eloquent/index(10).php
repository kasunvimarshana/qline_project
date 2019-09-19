<!-- ------------------------------------------------------------------------------------- -->
<?php

class User {
  public function profile() {
    return $this -> hasOne(Profile::class);
  }
}
class Profile {
  public function user() {
    return $this -> belongsTo(User::class);
  }
}

?>
<!-- ------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------------------- -->
<?php

// Create relation between user and Profile.
$user -> profile() -> save($profile);
// Create relation between Profile and User.
$profile -> user() -> associate($user) -> save();

?>
<!-- ------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------------------- -->
<?php

// Create relation between User and Profile. 
$user -> profiles() -> saveMany([$profile1, $profile2, ]);
// Or use the save() function for single model.
$thief -> profiles() -> save($profile);
// Create relation between Profile and User.
$profile -> user() -> associate($user) -> save();

?>
<!-- ------------------------------------------------------------------------------------- -->