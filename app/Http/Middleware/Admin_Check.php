<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;

class Admin_Check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check())
        {
            return redirect('login');
        }


        // if(Auth::user()->role == '1'){
        //     return $next($request);
        // }
        // else
        // {
        //     // Auth::logout();
        //     return redirect('user-dashboard');
        // }


        if(! (Auth::user()->role == '1')){
            return redirect('user-dashboard');

        }
        else
        {
            // Auth::logout();
            return $next($request);

        }
    }
}
