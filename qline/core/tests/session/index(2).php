<!-- ------------------------------------------------------------------------- -->
<?php

//Create a response instance
$response = new Illuminate\Http\Response('Hello World');

//Call the withCookie() method with the response method
$response->withCookie(cookie('name', 'value', $minutes));

//return the response
return $response;

?>
<!-- ------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------- -->
<?php

$response->withCookie(cookie()->forever('name', 'value'));

?>
<!-- ------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------- -->
<?php

//’name’ is the name of the cookie to retrieve the value of
$value = $request->cookie('name');

?>
<!-- ------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------- -->
<?php

//Creating a new Cookie
$cookie = Cookie::make($name, $value, $minutes, $path, $domain,$secure, $httpOnly);

?>
<!-- ------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------- -->
<?php

//Creating A Cookie That Lasts Forever
$cookie = Cookie::forever('name', 'value');

?>
<!-- ------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------- -->
<?php

//To create a cookie that won’t expire for 60 minutes
$cookie = Cookie::make('name', 'value',60);

?>
<!-- ------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------- -->
<?php

//To create a cookie that will expire on browser close
$cookie = Cookie::make('name', 'value');

?>
<!-- ------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------- -->
<?php

//Retrieving Cookie
/*
cookie::get() method will return null if cookie not present with the given name and you can pass a default value as a second parameter.
*/
$val = Cookie::get('cookieName');
$name = Cookie::get('cookieName', 'defaultValue');

?>
<!-- ------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------- -->
<?php

//Delete Cookie
/*
For deleting cookies we use Cookie::forget() method as shown below,remember you have to always return the cookie with the response.
*/

$cookie = Cookie::forget('cookieName');
return Response::make('test')->withCookie($cookie);

?>
<!-- ------------------------------------------------------------------------- -->