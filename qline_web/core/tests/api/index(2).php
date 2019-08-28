///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<?php

/*
A brand new feature in Laravel 5 is an Artisan scheduler. This is designed to simplify tasks that need to be scheduled. All that is required is setting up one cron job that calls php artisan schedule:run and have it run every minute.

Once your cron is setup, you can schedule any task to run in a concise and friendly manner. It takes the pain out of having to remember cron scheduling and is really simple. These schedules are created inside your “app/Console//Kernel.php” file.
*/

/*
Here is an example of a fictional task to clear the cache every hour:
*/
$schedule->command('cache:clear')->hourly()->sendOutputTo($filePath)->emailOutputTo('john@doe.com');

/*
It doesn’t end there. You can also call class methods:
*/
$schedule->call('SomeClass@method')->dailyAt('10:00');

/*
Or use a closure:
*/
$schedule->call(function(){
    //.. 
})->everyThirtyMinutes();

/*
And even terminal commands:
*/
$schedule->terminal('gulp task')->fridays()->when(function(){ 
    return true;
});

?>
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////