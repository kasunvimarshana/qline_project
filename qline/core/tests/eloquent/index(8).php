<!-- ---------------------------------------------------------------------- -->
<?php

/*
Use wildcard (*) checks for the current route
If you have some kind of navigation and want to add a class='active', you might be tempted to do something like if( request()->is('control-panel') || request()->is('control-panel/change-email') || request()->is('control-panel/edit-profile') { ... } to check the current URI (or passing an array to is()).

However, you can just use a wildcard:
*/
    if (request()->is("control-panel*")) { ... }

/*
You can use routeIs() in a similar way, but with the route name. (You can use this with the above tip (route name prefixes) to ensure that it always matches correctly.)
*/

?>
<!-- ---------------------------------------------------------------------- -->