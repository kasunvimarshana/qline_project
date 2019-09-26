<!-- --------------------------------------------------- -->
<?php

route($name, $parameters = [], $absolute = true, $route = null);

?>
<!-- --------------------------------------------------- -->
<!-- --------------------------------------------------- -->
<?php

// Fully qualified URL.
$urlOne = route('profile', [
    'custom' => 'data'
]);

// Relative URL.
$urlTwo = route('profile', [
    'custom' => 'data'
], false);

?>
<!-- --------------------------------------------------- -->
<!-- --------------------------------------------------- -->
Fully qualified URL.
http://laravel.artisan/user/profile?custom=data

Relative URL.
/user/profile?custom=data
<!-- --------------------------------------------------- -->