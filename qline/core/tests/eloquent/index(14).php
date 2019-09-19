<!-- ------------------------------------------------------------------- -->
<?php

/**
 * Get the author of the post.
 */
public function user()
{
    return $this->belongsTo('App\User')->withDefault();
}

?>
<!-- ------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------- -->
<?php

// Paper.php model
public function questions()
{
	return $this->belongsToMany('App\Question')->withPivot('question_score');
}

// Question.php model
public function papers()
{
	return $this->belongsToMany('App\Paper')->withPivot('question_score');
}

// anywhere in controllers

// update paper's questions
$paper->questions()->sync([
	$question_1_id => ['question_score' => 'your_value'],
	$question_2_id => ['question_score' => 'your_value'],
]); // assuming that: $paper is valid instance, $question_1_id & $question_2_id are valid ids

// update question's papers
$question->papers()->sync([
	$paper_1_id => ['question_score' => 'your_value'],
	$paper_2_id => ['question_score' => 'your_value'],
]);

?>
<!-- ------------------------------------------------------------------- -->