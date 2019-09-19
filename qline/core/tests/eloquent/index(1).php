<!-- --------------------------------------------------------------------------- -->
<?php

public function store(Requests\StoreNewUser $request)
{
    $user = App\User::create(
        $request->only(
            [
                'first_name',
                'last_name',
                'email'
            ]
        )
    );

    $user->password = Illuminate\Support\Facades\Hash::make($request->password);
    //or $user->password = bcrypt($request->password);

    $user->profile()->create(
        [
            'mobile_no' =>  $request->mobile;
        ]
    );

    dd($user);
}

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

//Specifying The Query Connection
/*
You may also specify which database connection should be used when running an Eloquent query. Simply use the on method:
*/
$user = User::on('connection-name')->find(1);

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

//Defining Guarded Attributes On A Model
/*
The inverse of fillable is guarded, and serves as a "black-list" instead of a "white-list":
*/
class User extends Eloquent {

    protected $guarded = array('id', 'password');
    protected $guarded = array('*');

}

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

// Create a new user in the database...
$user = User::create(array('name' => 'John'));
// Retrieve the user by the attributes, or create it if it doesn't exist...
$user = User::firstOrCreate(array('name' => 'John'));
// Retrieve the user by the attributes, or instantiate a new instance...
$user = User::firstOrNew(array('name' => 'John'));

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

//Saving A Model And Relationships
/*
Sometimes you may wish to save not only a model, but also all of its relationships. To do so, you may use the push method:
*/
$user->push();

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

//Deleting An Existing Model By Key
User::destroy(1);
User::destroy(array(1, 2, 3));
User::destroy(1, 2, 3);
$affectedRows = User::where('votes', '>', 100)->delete();

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

//Defining A Query Scope
/*
Scopes allow you to easily re-use query logic in your models. To define a scope, simply prefix a model method with scope:
*/
class User extends Eloquent {

    public function scopePopular($query)
    {
        return $query->where('votes', '>', 100);
    }

    public function scopeWomen($query)
    {
        return $query->whereGender('W');
    }

}

$users = User::popular()->women()->orderBy('created_at')->get();

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

//Dynamic Scopes
/*
Sometimes you may wish to define a scope that accepts parameters. Just add your parameters to your scope function:
*/
class User extends Eloquent {

    public function scopeOfType($query, $type)
    {
        return $query->whereType($type);
    }

}

$users = User::ofType('member')->get();

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

//Querying Relations When Selecting
/*
When accessing the records for a model, you may wish to limit your results based on the existence of a relationship. For example, you wish to pull all blog posts that have at least one comment. To do so, you may use the has method:
*/
$posts = Post::has('comments')->get();
$posts = Post::has('comments', '>=', 3)->get();
$posts = Post::whereHas('comments', function($q){
    $q->where('content', 'like', 'foo%');
})->get();

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

//You may even eager load nested relationships:
$books = Book::with('author.contacts')->get();

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

//Eager Load Constraints
/*
Sometimes you may wish to eager load a relationship, but also specify a condition for the eager load. Here's an example:
*/
$users = User::with(array('posts' => function($query){
    $query->where('title', 'like', '%first%');
}))->get();

$users = User::with(array('posts' => function($query){
    $query->orderBy('created_at', 'desc');
}))->get();

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

$books = Book::all();
$books->load('author', 'publisher');

?>
<!-- --------------------------------------------------------------------------- -->