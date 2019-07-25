<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\UserAPIToken;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        /*
        Auth::viaRequest('custom-token', function ($request) {
            $user_id = null;
            $token = null;
            //user_id
            if( $request->header('user_id') ){
                $user_id = urldecode( $request->header('user_id') );
            }else{
                $user_id = urldecode( $request->input('user_id') );
            }
            //token
            if( $request->header('token') ){
                $token = urldecode( $request->header('token') );
            }else{
                $token = urldecode( $request->input('token') );
            }
            
            return User::where('token', $token)->first();
        });
        */
        
    }
}
