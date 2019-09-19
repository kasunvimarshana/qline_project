<!-- ----------------------------------------------------------------------------------------- -->
<?php

class Country extends Model
{
    public function posts()
    {
        return $this->hasManyThrough(
            'App\Post',
            'App\User',
            'country_id', // Foreign key on users table...
            'user_id', // Foreign key on posts table...
            'id', // Local key on countries table...
            'id' // Local key on users table...
        );
    }
}

?>
<!-- ----------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------- -->
<?php

//Many To Many Relationships
$user = App\User::find(1);
$user->roles()->attach($roleId);

//When attaching a relationship to a model, you may also pass an array of additional data to be inserted into the intermediate table:
$user->roles()->attach($roleId, ['expires' => $expires]);

// Detach a single role from the user...
$user->roles()->detach($roleId);

// Detach all roles from the user...
$user->roles()->detach();

//For convenience, attach and detach also accept arrays of IDs as input:
$user = App\User::find(1);
$user->roles()->detach([1, 2, 3]);
$user->roles()->attach([
    1 => ['expires' => $expires],
    2 => ['expires' => $expires]
]);

//Syncing Associations
$user->roles()->sync([1, 2, 3]);
//You may also pass additional intermediate table values with the IDs:
$user->roles()->sync([1 => ['expires' => true], 2, 3]);

//If you do not want to detach existing IDs, you may use the syncWithoutDetaching method:
$user->roles()->syncWithoutDetaching([1, 2, 3]);

//Saving Additional Data On A Pivot Table
/*
When working with a many-to-many relationship, the save method accepts an array of additional intermediate table attributes as its second argument:
*/
App\User::find(1)->roles()->save($role, ['expires' => $expires]);

//Updating A Record On A Pivot Table
/*
If you need to update an existing row in your pivot table, you may use updateExistingPivot method. This method accepts the pivot record foreign key and an array of attributes to update:
*/
$user = App\User::find(1);
$user->roles()->updateExistingPivot($roleId, $attributes);

?>
<!-- ----------------------------------------------------------------------------------------- -->