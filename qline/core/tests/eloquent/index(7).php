<!-- ------------------------------------------------------------------------------ -->
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function parentComments()
    {
        return $this->comments()->where('parent_id', 0);
    }
}

?>
<!-- ------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------ -->
<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Comment extends Model {
 
    public function replies()
    {
        return $this->hasMany(__CLASS__, 'parent_id');
    }
 
    public function allRepliesWithOwner()
    {
        return $this->replies()->with(__FUNCTION__, 'owner');
    }
 
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

?>
<!-- ------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------ -->
<?php

Route::get('/posts/{id}', function ($id)
{
    $post = App\Post::with([
    	'comments',
    	'parentComments.owner',
    	'parentComments.allRepliesWithOwner'
    ]);
    
    return view('post.single')->withPost(
    	$post->findOrFail($id)
    );
});

?>
<!-- ------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------ -->
<?php

$post = App\Post::with([
    'comments', // comments() method to call count() method to get the count o all comments including replies
    'parentComments.owner', // parentComments()->owner() method to load the owner of a parent comment only
    'parentComments.allRepliesWithOwner' // load all the replies including their replies recursively and owner of each
]);

?>
<!-- ------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------ -->
<?php

namespace Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model
{
   protected $table = 'users';
   public function posts()
   {
       return $this->hasMany('\Models\Post','user_id','id');
   }
   public function comments()
   {
       return $this->hasManyThrough('\Models\Comment','\Models\Post','user_id','post_id');
   }
}

?>
<!-- ------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------ -->
<?php

namespace Models;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
   protected $table = 'posts';
   public function posts()
   {
       $this->hasMany('\Models\Comment','post_id','id');
   }
   public function user()
   {
       $this->belongsTo('\Models\User','user_id','id');
   }
}

?>
<!-- ------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------ -->
<?php

namespace Models;
use Illuminate\Database\Eloquent\Model;
class Comment extends Model
{
   protected $table = 'comments';
   public function post()
   {
       $this->belongsTo('\Models\Post','post_id','id');
   }
}

?>
<!-- ------------------------------------------------------------------------------ -->