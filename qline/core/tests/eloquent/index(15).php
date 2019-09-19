<!-- ----------------------------------------------------------------------------------- -->
<?php

class User2 extends Eloquent{
	protected $table = "user2";
	public $timestamps = false;
	protected $guarded = array("id");
        
	public function sent(){
		return $this->belongsToMany("Post2", "post2_user2", "sender_id", "post_id")
 			->withPivot("status", "receiver_id")
 			->whereSenderId($this->id);
	}
	
	public function received(){
		return $this->belongsToMany("Post2", "post2_user2", "receiver_id", "post_id")
 			->withPivot("status", "sender_id")
 			->whereReceiverId($this->id);;
	}
	
}

?>
<!-- ----------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------- -->
<?php

<?php

class Post2 extends Eloquent{
	protected $table = "post2";
	public $timestamps = false;
	protected $guarded = array("id");
	
	public function senders(){
		return $this->belongsToMany("User2", "post2_user2", "post_id", "sender_id")
		->withPivot("status", "receiver_id");
	}

	public function receivers(){
		return $this->belongsToMany("User2", "post2_user2", "post_id", "receiver_id")
		->withPivot("status", "sender_id");
	}
	
}

?>
<!-- ----------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------- -->
<?php

Route::get("/strangeRelations", function(){
	
	$u1 = User2::find(1);
	$u2 = User2::find(2);
	$p = Post2::find(1);
	$p2 = Post2::find(2);
	
	
	$u1->sent()->attach($p->id, array("receiver_id"=>$u2->id, "status"=>1));
	$p2->senders()->attach($u2->id, array("receiver_id"=>$u1->id));
	

	echo $u1->sent->toJson();
	echo $u2->received->toJson();
});

?>
<!-- ----------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------- -->
SELECT posts.*, sender.*, receiver.* lists.*
FROM posts 
LEFT JOIN post_user ON posts.id = post_user.postsID 
LEFT JOIN users AS sender ON sender.id = sender_usersID 
LEFT JOIN users AS receiver ON receiver.id = receiver_usersID
LEFT JOIN lists ON fwd_user.listID = lists.id
<!-- ----------------------------------------------------------------------------------- -->