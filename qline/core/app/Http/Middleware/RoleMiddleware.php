<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    /*
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
    */
    public function handle($request, Closure $next, $role, $permission = null)
    {
        if(!$request->user()->user->hasRole($role)) {
            //abort(404);
            return redirect()->route('fallback');
        }
        if($permission !== null && !$request->user()->user->can($permission)) {
            //abort(404);
            return redirect()->route('fallback');
        }
        return $next($request);
    }
    /*
    Route::group(['middleware' => 'role:admin'], function() {
        Route::get('/admin', function() {
            return 'Welcome Admin';
        });
    });
    */
}
