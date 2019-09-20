<!-- ------------------------------------------------------------- -->
<?php

//Querying Relationship Existence
/*
When accessing the records for a model, you may wish to limit your results based on the existence of a relationship. For example, imagine you want to retrieve all blog posts that have at least one comment. To do so, you may pass the name of the relationship to the has and orHas methods:
*/

// Retrieve all posts that have at least one comment...
$posts = App\Post::has('comments')->get();

// Retrieve all posts that have three or more comments...
$posts = App\Post::has('comments', '>=', 3)->get();

/*
Nested has statements may also be constructed using "dot" notation. For example, you may retrieve all posts that have at least one comment and vote:
*/
// Retrieve all posts that have at least one comment with votes...
$posts = App\Post::has('comments.votes')->get();

/*
If you need even more power, you may use the whereHas and orWhereHas methods to put "where" conditions on your has queries. These methods allow you to add customized constraints to a relationship constraint, such as checking the content of a comment:
*/
// Retrieve all posts with at least one comment containing words like foo%
$posts = App\Post::whereHas('comments', function ($query) {
    $query->where('content', 'like', 'foo%');
})->get();

//Querying Relationship Absence
/*
When accessing the records for a model, you may wish to limit your results based on the absence of a relationship. For example, imagine you want to retrieve all blog posts that don't have any comments. To do so, you may pass the name of the relationship to the doesntHave and orDoesntHave methods:
*/
$posts = App\Post::doesntHave('comments')->get();

/*
If you need even more power, you may use the whereDoesntHave and orWhereDoesntHave methods to put "where" conditions on your doesntHave queries. These methods allows you to add customized constraints to a relationship constraint, such as checking the content of a comment:
*/
$posts = App\Post::whereDoesntHave('comments', function ($query) {
    $query->where('content', 'like', 'foo%');
})->get();

/*
You may use "dot" notation to execute a query against a nested relationship. For example, the following query will retrieve all posts with comments from authors that are not banned:
*/
$posts = App\Post::whereDoesntHave('comments.author', function ($query) {
    $query->where('banned', 1);
})->get();

//Counting Related Models
/*
If you want to count the number of results from a relationship without actually loading them you may use the withCount method, which will place a {relation}_count column on your resulting models. For example:
*/
$posts = App\Post::withCount('comments')->get();
foreach ($posts as $post) {
    echo $post->comments_count;
}

/*
You may add the "counts" for multiple relations as well as add constraints to the queries:
*/
$posts = App\Post::withCount(['votes', 'comments' => function ($query) {
    $query->where('content', 'like', 'foo%');
}])->get();
echo $posts[0]->votes_count;
echo $posts[0]->comments_count;

/*
You may also alias the relationship count result, allowing multiple counts on the same relationship:
*/
$posts = App\Post::withCount([
    'comments',
    'comments as pending_comments_count' => function ($query) {
        $query->where('approved', false);
    }
])->get();
echo $posts[0]->comments_count;
echo $posts[0]->pending_comments_count;


//Filtering Relationships Via Intermediate Table Columns
/*
You can also filter the results returned by belongsToMany using the wherePivot and wherePivotIn methods when defining the relationship:
*/
return $this->belongsToMany('App\Role')->wherePivot('approved', 1);
return $this->belongsToMany('App\Role')->wherePivotIn('priority', [1, 2]);



class StoreMember extends Model
{
    public function visits()
    {
        return $this->hasMany('Visits', 'user_id', 'user_id')
            ->where('store_id', $this->store_id);
    }
}

?>
<!-- ------------------------------------------------------------- -->