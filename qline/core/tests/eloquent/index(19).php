<!-- ------------------------------------------------------------------------------------ -->
<?php

//Polymorphic Many To Many Relationship
class Male {
  public function phones() {
    return $this - > morphToMany(Phone::class, 'person');
  }
}
class Female {
  public function phones() {
    return $this - > morphToMany(Phone::class, 'person');
  }
}
class Phone {
  public function males() {
    return $this - > morphedByMany(Male::class, 'person');
  }
  public function females() {
    return $this - > morphedByMany(Female::class, 'person');
  }
}

?>
<!-- ------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------ -->
<?php

Schema::create('males', function(Blueprint $table) {
  $table -> increments('id');
  $table -> string('name');
});
Schema::create('females', function(Blueprint $table) {
  $table -> increments('id');
  $table -> string('name');
});
Schema::create('persons', function(Blueprint $table) {
  $table -> increments('id');
  $table -> integer('person_id') -> unsigned() -> index();
  $table -> string('person_type');
  // or use
  $table -> morphs(‘person’);
  //instead of "person_id" and "person_type"
  $table -> integer('phone_id') -> unsigned() -> index();
  $table -> foreign('phone_id') -> references('id') -> on('phones') -> onDelete('cascade');
});

?>
<!-- ------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------ -->
<?php

// Create relation between person (Male/Female) and Phone. 
$male -> phones() -> saveMany([$phone1, $phone2]);
$female -> phones() -> saveMany([$phone1, $phone2]);
// Or use the save() function for single model. 
$male -> phones() -> save($phone1);
$female -> phones() -> save($phone1);
// Create relation between Phone and person (Male/Female). 
$phone -> males() -> attach([$male1 -> id, $male2 -> id, ]);
$car -> females() -> attach([$female1 -> id, $female2 -> id, ]);
// Or use the sync() function to prevent duplicated relations. 
$phone -> males() -> sync([$male1 -> id, $male2 -> id, ]);
$phone -> females() -> sync([$female1 -> id, $female2 -> id, ]);

?>
<!-- ------------------------------------------------------------------------------------ -->