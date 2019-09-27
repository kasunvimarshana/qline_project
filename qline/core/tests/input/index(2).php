<!-- --------------------------------------------------------------------------- -->
<?php

$input = $request->all();

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

$name = $request->input('name');

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

/*
You may pass a default value as the second argument to the input method. This value will be returned if the requested input value is not present on the request:
*/
$name = $request->input('name', 'Sally');

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

/*
When working with forms that contain array inputs, use "dot" notation to access the arrays:
*/
$name = $request->input('products.0.name');

$names = $request->input('products.*.name');

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

/*
You may call the input method without any arguments in order to retrieve all of the input values as an associative array:
*/
$input = $request->input();

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

//Retrieving Input From The Query String
/*
While the input method retrieves values from entire request payload (including the query string), the query method will only retrieve values from the query string:
*/
$name = $request->query('name');

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

/*
If the requested query string value data is not present, the second argument to this method will be returned:
*/
$name = $request->query('name', 'Helen');

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

/*
You may call the query method without any arguments in order to retrieve all of the query string values as an associative array:
*/
$name = $request->query('name', 'Helen');

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

//Retrieving JSON Input Values
/*
When sending JSON requests to your application, you may access the JSON data via the input method as long as the Content-Type header of the request is properly set to application/json. You may even use "dot" syntax to dig into JSON arrays:
*/
$name = $request->input('user.name');

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

//Retrieving A Portion Of The Input Data
/*
If you need to retrieve a subset of the input data, you may use the only and except methods. Both of these methods accept a single array or a dynamic list of arguments:
*/
$input = $request->only(['username', 'password']);
$input = $request->only('username', 'password');
$input = $request->except(['credit_card']);
$input = $request->except('credit_card');

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

//Determining If An Input Value Is Present
/*
You should use the has method to determine if a value is present on the request. The has method returns true if the value is present on the request:
*/
if ($request->has('name')) {
    //
}

/*
When given an array, the has method will determine if all of the specified values are present:
*/
if ($request->has(['name', 'email'])) {
    //
}

/*
If you would like to determine if a value is present on the request and is not empty, you may use the filled method:
*/
if ($request->filled('name')) {
    //
}

?>
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<?php

// Show only POST data
$request->post(); // DI
request()->post(); // global method
Request::post(); // facade

// Show only GET data
$request->query(); // DI
request()->query(); // global method
Request::query(); // facade

// Show all data (i.e. both GET and POST data)
$request->all(); // DI
request()->all(); // global method
Request::all(); // facade

?>
<!-- --------------------------------------------------------------------------- -->