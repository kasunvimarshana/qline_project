<!-- --------------------------------------------------------------------------------------- -->
<?php

namespace App\Observers;

use App\User;
use App\Invites;
use Illuminate\Support\Facades\Mail;

class UserObserver
{
    public function creating(User $user)
    {
        $invite = Invites::where('email',$user->email)->first();

        if ($invite) {
            $user->referrer = $invite->user_id;
        }
    }

    public function created(User $user)
    {
        Mail::raw("Some custom message here", function ($message){
            $message->to($user->email)->subject("Please confirm your account");
        });
    }

    public function deleting(User $user)
    {
        $user->orders->map(function($order) {
            if ($order->is_delivered == false) {
                abort(403,'You cannot delete your account yet');
            }
        });
    }

    public function deleted(User $user)
    {
        Mail::raw("Some custom message here", function ($message){
            $message->to($user->email)->subject("We hate to see you go");
        });
    }
}

?>
<!-- --------------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------------- -->
<?php

namespace App\Providers;

use App\User;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        User::observe(UserObserver::class);
    }

    // [...]
}

?>
<!-- --------------------------------------------------------------------------------------- -->