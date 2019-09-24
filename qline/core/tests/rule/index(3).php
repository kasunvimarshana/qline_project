<!-- ------------------------------------------------------------------------------------------- -->
<?php

//Using Closures
/*
If you only need the functionality of a custom rule once throughout your application, you may use a Closure instead of a rule object. The Closure receives the attribute's name, the attribute's value, and a $fail callback that should be called if validation fails:
*/
$validator = Validator::make($request->all(), [
    'title' => [
        'required',
        'max:255',
        function($attribute, $value, $fail) {
            if ($value === 'foo') {
                return $fail($attribute.' is invalid.');
            }
        },
    ],
]);

?>
<!-- ------------------------------------------------------------------------------------------- -->