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
        Auth::viaRequest('user-token', function ($request) {
            
            $remember_token = null;
            $user_id = null;
            $user = null;
            // user_id
            if( $request->header('user_id') ){
                $user_id = $request->header('user_id');
            }else{
                $user_id = $request->input('user_id');
            }
            // remember_token
            if( $request->header('remember_token') ){
                $remember_token = $request->header('remember_token');
            }else{
                $remember_token = $request->input('remember_token');
            }
            
            return UserAPIToken::where('user_id', '=', $user_id)
                ->where('remember_token', '=', $remember_token)
                ->first();
            
        });
    }
}
