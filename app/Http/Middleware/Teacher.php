<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Teacher
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
            if($user=='teacher'){
                return $next($request);
            }
            else{
                return redirect('/lecturer/dashboard');
            }
        }
    }
}
