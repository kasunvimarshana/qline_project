<!-- -------------------------------------------------------------------- -->
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request, $id)
    {
        $value = $request->session()->get('key');

        //
    }
}

?>
<!-- -------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------- -->
<?php

$data = $request->session()->all();

$value = $request->session()->get('key', 'default');

$value = $request->session()->get('key', function () {
    return 'default';
});

?>
<!-- -------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------- -->
<?php

Route::get('home', function () {
    // Retrieve a piece of data from the session...
    $value = session('key');

    // Specifying a default value...
    $value = session('key', 'default');

    // Store a piece of data in the session...
    session(['key' => 'value']);
});

?>
<!-- -------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------- -->
<?php

//Determining If An Item Exists In The Session

/*
To determine if an item is present in the session, you may use the has method. The has method returns true if the item is present and is not null:
*/
if ($request->session()->has('users')) {
    //
}

/*
To determine if an item is present in the session, even if its value is null, you may use the exists method. The exists method returns true if the item is present:
*/
if ($request->session()->exists('users')) {
    //
}

?>
<!-- -------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------- -->
<?php

//Storing Data
/*
To store data in the session, you will typically use the put method or the session helper:
*/
// Via a request instance...
$request->session()->put('key', 'value');

// Via the global helper...
session(['key' => 'value']);

?>
<!-- -------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------- -->
<?php

//Pushing To Array Session Values
/*
The push method may be used to push a new value onto a session value that is an array. For example, if the user.teams key contains an array of team names, you may push a new value onto the array like so:
*/
$request->session()->push('user.teams', 'developers');

?>
<!-- -------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------- -->
<?php

//Retrieving & Deleting An Item
/*
The pull method will retrieve and delete an item from the session in a single statement:
*/
$value = $request->session()->pull('key', 'default');

?>
<!-- -------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------- -->
<?php

//Flash Data
/*
Sometimes you may wish to store items in the session only for the next request. You may do so using the flash method. Data stored in the session using this method will only be available during the subsequent HTTP request, and then will be deleted. Flash data is primarily useful for short-lived status messages:
*/
$request->session()->flash('status', 'Task was successful!');

?>
<!-- -------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------- -->
<?php

/*
If you need to keep your flash data around for several requests, you may use the reflash method, which will keep all of the flash data for an additional request. If you only need to keep specific flash data, you may use the keep method:
*/
$request->session()->reflash();

$request->session()->keep(['username', 'email']);

?>
<!-- -------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------- -->
<?php

//Deleting Data
/*
The forget method will remove a piece of data from the session. If you would like to remove all data from the session, you may use the flush method:
*/

// Forget a single key...
$request->session()->forget('key');

// Forget multiple keys...
$request->session()->forget(['key1', 'key2']);

$request->session()->flush();

?>
<!-- -------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------- -->
<?php

//Regenerating The Session ID
/*
Regenerating the session ID is often done in order to prevent malicious users from exploiting a session fixation attack on your application.
*/
/*
Laravel automatically regenerates the session ID during authentication if you are using the built-in LoginController; however, if you need to manually regenerate the session ID, you may use the regenerate method.
*/
$request->session()->regenerate();

?>
<!-- -------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------- -->
<?php

$session_id = session_id();
$session_id = Session::getId();
$session_id = session()->getId();

?>
<!-- -------------------------------------------------------------------- -->