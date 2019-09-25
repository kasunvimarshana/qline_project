<!-- ------------------------------------------------------------ -->
<?php

if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1]))
{
    // The user is active, not suspended, and exists.
}

?>
<!-- ------------------------------------------------------------ -->
<!-- ------------------------------------------------------------ -->
<?php

//Determining If A User Is Authenticated
/*
To determine if the user is already logged into your application, you may use the check method:
*/
if (Auth::check())
{
    // The user is logged in...
}

?>
<!-- ------------------------------------------------------------ -->
<!-- ------------------------------------------------------------ -->
<?php

//Authenticating A User And "Remembering" Them
/*
If you would like to provide "remember me" functionality in your application, you may pass a boolean value as the second argument to the attempt method, which will keep the user authenticated indefinitely, or until they manually logout. Of course, your users table must include the string remember_token column, which will be used to store the "remember me" token.
*/
if (Auth::attempt(['email' => $email, 'password' => $password], $remember))
{
    // The user is being remembered...
}

?>
<!-- ------------------------------------------------------------ -->
<!-- ------------------------------------------------------------ -->
<?php

/*
If you are "remembering" users, you may use the viaRemember method to determine if the user was authenticated using the "remember me" cookie:
*/
if (Auth::viaRemember())
{
    //
}

?>
<!-- ------------------------------------------------------------ -->
<!-- ------------------------------------------------------------ -->
<?php

//Authenticating Users By ID
/*
To log a user into the application by their ID, use the loginUsingId method:
*/
Auth::loginUsingId(1);

?>
<!-- ------------------------------------------------------------ -->
<!-- ------------------------------------------------------------ -->
<?php

//Validating User Credentials Without Login
/*
The validate method allows you to validate a user's credentials without actually logging them into the application:
*/
if (Auth::validate($credentials))
{
    //
}

?>
<!-- ------------------------------------------------------------ -->
<!-- ------------------------------------------------------------ -->
<?php

//Logging A User In For A Single Request
/*
You may also use the once method to log a user into the application for a single request. No sessions or cookies will be utilized:
*/
if (Auth::once($credentials))
{
    //
}

?>
<!-- ------------------------------------------------------------ -->
<!-- ------------------------------------------------------------ -->
<?php

//Manually Logging In A User
/*
If you need to log an existing user instance into your application, you may call the login method with the user instance:
*/
Auth::login($user);

?>
<!-- ------------------------------------------------------------ -->
<!-- ------------------------------------------------------------ -->
<?php

//Logging A User Out Of The Application
Auth::logout();

?>
<!-- ------------------------------------------------------------ -->
<!-- ------------------------------------------------------------ -->
<?php

if (Auth::user())
{
    // Auth::user() returns an instance of the authenticated user...
}

?>
<!-- ------------------------------------------------------------ -->
<!-- ------------------------------------------------------------ -->
<?php

if ($request->user())
{
    // $request->user() returns an instance of the authenticated user...
}

?>
<!-- ------------------------------------------------------------ -->
<!-- ------------------------------------------------------------ -->
<?php

If you are using PHP FastCGI, HTTP Basic authentication may not work correctly out of the box. The following lines should be added to your .htaccess file:

RewriteCond %{HTTP:Authorization} ^(.+)$
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

?>
<!-- ------------------------------------------------------------ -->