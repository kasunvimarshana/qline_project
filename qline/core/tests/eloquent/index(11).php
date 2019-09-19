<!-- --------------------------------------------------------------------------------------------------------- -->
<?php

class User {
  public function phones() {
    return $this -> belongsToMany(Phone::class);
  }
}
class Phone {
  public function users() {
    return $this -> belongsToMany(User::class);
  }
}

?>
<!-- --------------------------------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------------------------------- -->
<?php

//Create 'users' table
Schema::create('users', function(Blueprint $table) {
  $table - > increments('id');
  $table - > string('name');
});
//Create 'phones' table
Schema::create('phones', function(Blueprint $table) {
  $table - > increments('id');
  $table - > string('name');
});
//Create 'phone_user' table 
Schema::create('phone_user', function(Blueprint $table) {
  $table - > increments('id');
  $table - > integer('phone_id') - > unsigned() - > index();
  $table - > foreign('phone_id') - > references('id') - > on('phones') - > onDelete('cascade');
  $table - > integer('user_id') - > unsigned() - > index();
  $table - > foreign('user_id') - > references('id') - > on('users') - > onDelete('cascade');
});

?>
<!-- --------------------------------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------------------------------- -->
<?php

// Create relation between User and Phone.
$user - > phones() - > attach([$phone1 - > id, $phone - > id, ]);
// Or use the sync() function to prevent duplicated relations.
$user - > phones() - > sync([$phone1 - > id, $phone2 - > id, ]);
// Create relation between Phone and User. 
$phone - > users() - > attach([$user1 - > id, $user2 - > id, ]);
// Or use the sync() function to prevent duplicated relations.
$phone - > users() - > sync([$user1 - > id, $user2 - > id, ]);

?>
<!-- --------------------------------------------------------------------------------------------------------- -->