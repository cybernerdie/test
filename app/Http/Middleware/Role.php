<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::check()){
            return redirect('/login');
        }

        else{
            $user = Auth::user()->role;
            if(!is_null($user) || $user !== ' '){
                return $next($request); 
            }
            else{
                return redirect('/verifyrole');
            }
        }

    }
}
