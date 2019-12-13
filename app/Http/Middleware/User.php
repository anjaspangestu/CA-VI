<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class User
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
        if(Auth::user()->role_id == 2){
            return $next($request);
        }

        else if(Auth::user()->role_id == 1){
            return redirect('home');
        }
        else {
            return redirect('user.home.home');
        }
    }
}
