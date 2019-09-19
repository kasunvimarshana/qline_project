<!-- -------------------------------------------------------------------------------- -->
<?php

//The Create Method
/*
In addition to the save and saveMany methods, you may also use the create method, which accepts an array of attributes, creates a model, and inserts it into the database. Again, the difference between save and create is that save accepts a full Eloquent model instance while create accepts a plain PHP array:
*/
$post = App\Post::find(1);
$comment = $post->comments()->create([
    'message' => 'A new comment.',
]);

?>
<!-- -------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------- -->
<?php

$post = App\Post::find(1);
$post->comments()->createMany([
    [
        'message' => 'A new comment.',
    ],
    [
        'message' => 'Another new comment.',
    ],
])

?>
<!-- -------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------- -->
<?php

//Attaching A Related Model
$comment = new Comment(array('message' => 'A new comment.'));
$post = Post::find(1);
$comment = $post->comments()->save($comment);

?>
<!-- -------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------- -->
<?php

//Attaching A Related Model
$comments = array(
    new Comment(array('message' => 'A new comment.')),
    new Comment(array('message' => 'Another comment.')),
    new Comment(array('message' => 'The latest comment.'))
);
$post = Post::find(1);
$post->comments()->saveMany($comments);

?>
<!-- -------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------- -->
<?php

//Associating Models (Belongs To)
/*
When updating a belongsTo relationship, you may use the associate method. This method will set the foreign key on the child model:
*/
$account = Account::find(10);
$user->account()->associate($account);
$user->save();

?>
<!-- -------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------- -->
<?php

$comment = Comment::find(1);
$post = Post::find(2);
 
$comment->post()->associate($post)->save();

?>
<!-- -------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------- -->
<?php

//Inserting Related Models (Many To Many)
/*
You may also insert related models when working with many-to-many relations. Let's continue using our User and Role models as examples. We can easily attach new roles to a user using the attach method:
*/
//Attaching Many To Many Models
$user = User::find(1);
$user->roles()->attach(1);

//You may also pass an array of attributes that should be stored on the pivot table for the relation:
$user->roles()->attach(1, array('expires' => $expires));

//Of course, the opposite of attach is detach:
$user->roles()->detach(1);

//Both attach and detach also take arrays of IDs as input:
$user = User::find(1);
$user->roles()->detach([1, 2, 3]);
$user->roles()->attach([1 => ['attribute1' => 'value1'], 2, 3]);

?>
<!-- -------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------- -->
<?php

//Model Observers
/*
To consolidate the handling of model events, you may register a model observer. An observer class may have methods that correspond to the various model events. For example, creating, updating, saving methods may be on an observer, in addition to any other model event name.

So, for example, a model observer might look like this:
*/
class UserObserver {

    public function saving($model)
    {
        //
    }

    public function saved($model)
    {
        //
    }

}

//You may register an observer instance using the observe method:
User::observe(new UserObserver);

?>
<!-- -------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------- -->
<?php

//Since we need only the user’s first name, we can choose to eager load it like this:
$orders = \App\Order::with('user:id,name')->get();
foreach($orders as $order){
    echo $order->user->first_name;
}

?>
<!-- -------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------- -->
<?php

//For example, assume you want to retrieve only orders that have been delivered and assign a delivery status text to them, you can do the following:

$orders = \App\Order::all()->reject(function ($order) {
    return $order->is_delivered == false;
})->map(function ($order) {
    $order->status = "Fulfilled";
    return $order;
});

?>
<!-- -------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------- -->
<?php

//Say you want to return both delivered and undelivered orders, and group them like delivered = [], undelivered = [], you can do something like:

$orders = \App\Order::all()->map(function ($order) {
    $order->status = $order->is_delivered ? "delivered" : "undelivered";
    return $order;
})->mapToGroups(function ($item, $key) {
    return [$item['status'] => $item];
});

?>
<!-- -------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------- -->
<?php

//If you want the product and price to be a key-value pair, you can do something like this:
$products = \App\Product::all()->mapWithKeys(function ($item) {
    return [$item['name'] => $item['price']];
});

foreach($products as $key => $value) {
    echo "{$key}: {$value}";
}

?>
<!-- -------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------- -->
<?php

//What if you want to return all orders delivered on a particular day, you can do something like this:
public function orderOnDate(Request $request){
    $orders = \App\Order::all()->filter(function ($order) use ($request) {
        return $order->delivered_at == $request->date;
    });
}

?>
<!-- -------------------------------------------------------------------------------- -->