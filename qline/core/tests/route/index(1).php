<!-- ------------------------------------------------------------------ -->
<?php

Route::match(['get', 'post'], '/', function () {
    //
});

Route::any('foo', function () {
    //
});

?>
<!-- ------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------ -->
<?php

Route::redirect('/here', '/there');

Route::redirect('/here', '/there', 301);

Route::permanentRedirect('/here', '/there');

?>
<!-- ------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------ -->
<?php

//View Routes
Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

?>
<!-- ------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------ -->
<?php

//Required Parameters
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});

?>
<!-- ------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------ -->
<?php

//Optional Parameters
Route::get('user/{name?}', function ($name = null) {
    return $name;
});

Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});

?>
<!-- ------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------ -->
<?php

//Regular Expression Constraints
Route::get('user/{name}', function ($name) {
    //
})->where('name', '[A-Za-z]+');

Route::get('user/{id}', function ($id) {
    //
})->where('id', '[0-9]+');

Route::get('user/{id}/{name}', function ($id, $name) {
    //
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

?>
<!-- ------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------ -->
<?php

//Encoded Forward Slashes
Route::get('search/{search}', function ($search) {
    return $search;
})->where('search', '.*');

?>
<!-- ------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------ -->
<?php

//Named Routes
Route::get('user/profile', function () {
    //
})->name('profile');

?>
<!-- ------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------ -->
<?php

// Generating URLs...
$url = route('profile');
// Generating Redirects...
return redirect()->route('profile');

?>
<!-- ------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------ -->
<?php

Route::get('user/{id}/profile', function ($id) {
    //
})->name('profile');

$url = route('profile', ['id' => 1]);

?>
<!-- ------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------ -->
<?php

public function handle($request, Closure $next)
{
    if ($request->route()->named('profile')) {
        //
    }

    return $next($request);
}

?>
<!-- ------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------ -->
<?php

//Middleware
Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Uses first & second Middleware
    });

    Route::get('user/profile', function () {
        // Uses first & second Middleware
    });
});

?>
<!-- ------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------ -->
<?php

//Namespaces
Route::namespace('Admin')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
});

?>
<!-- ------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------ -->
<?php

//Sub-Domain Routing
Route::domain('{account}.myapp.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});

?>
<!-- ------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------ -->
<?php

//Route Prefixes
Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        // Matches The "/admin/users" URL
    });
});

?>
<!-- ------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------ -->
<?php

//Route Name Prefixes
Route::name('admin.')->group(function () {
    Route::get('users', function () {
        // Route assigned name "admin.users"...
    })->name('users');
});

?>
<!-- ------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------ -->
<?php

$route = Route::current();

$name = Route::currentRouteName();

$action = Route::currentRouteAction();

?>
<!-- ------------------------------------------------------------------ -->