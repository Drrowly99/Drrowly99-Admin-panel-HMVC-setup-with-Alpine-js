<?php

namespace Modules\Dashboard\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Dashboard\Providers\RouteServiceProvider;

class AuthCheck
{
  
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if(!Session()->has('loginId')){
            return redirect('login')->with('error', 'Kindly login first');
        }
        return $next($request);
    }
}
