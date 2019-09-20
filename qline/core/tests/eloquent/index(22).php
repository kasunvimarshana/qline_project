<!-- ------------------------------------------------------------------------------------ -->
<?php

/*
To load a relationship only when it has not already been loaded, use the loadMissing method:
*/
public function format(Book $book)
{
    $book->loadMissing('author');

    return [
        'name' => $book->name,
        'author' => $book->author->name
    ];
}

?>
<!-- ------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------ -->
<?php

//Many To Many Relationships
/*
Eloquent also provides a few additional helper methods to make working with related models more convenient. For example, let's imagine a user can have many roles and a role can have many users. To attach a role to a user by inserting a record in the intermediate table that joins the models, use the attach method:
*/
$user = App\User::find(1);
$user->roles()->attach($roleId);

/*
When attaching a relationship to a model, you may also pass an array of additional data to be inserted into the intermediate table:
*/
$user->roles()->attach($roleId, ['expires' => $expires]);

/*
Of course, sometimes it may be necessary to remove a role from a user. To remove a many-to-many relationship record, use the detach method. The detach method will remove the appropriate record out of the intermediate table; however, both models will remain in the database:
*/
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
/*
You may also use the sync method to construct many-to-many associations. The sync method accepts an array of IDs to place on the intermediate table. Any IDs that are not in the given array will be removed from the intermediate table. So, after this operation is complete, only the IDs in the given array will exist in the intermediate table:
*/
$user->roles()->sync([1, 2, 3]);

/*
You may also pass additional intermediate table values with the IDs:
*/
$user->roles()->sync([1 => ['expires' => true], 2, 3]);

/*
If you do not want to detach existing IDs, you may use the syncWithoutDetaching method:
*/
$user->roles()->syncWithoutDetaching([1, 2, 3]);

//Toggling Associations
/*
The many-to-many relationship also provides a toggle method which "toggles" the attachment status of the given IDs. If the given ID is currently attached, it will be detached. Likewise, if it is currently detached, it will be attached:
*/
$user->roles()->toggle([1, 2, 3]);

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
<!-- ------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------ -->
<?php

//Touching Parent Timestamps
/*
When a model belongsTo or belongsToMany another model, such as a Comment which belongs to a Post, it is sometimes helpful to update the parent's timestamp when the child model is updated. For example, when a Comment model is updated, you may want to automatically "touch" the updated_at timestamp of the owning Post. Eloquent makes it easy. Just add a touches property containing the names of the relationships to the child model:
*/
namespace App;
use Illuminate\Database\Eloquent\Model;
class Comment extends Model
{
    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['post'];

    /**
     * Get the post that the comment belongs to.
     */
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}

?>
<!-- ------------------------------------------------------------------------------------ -->