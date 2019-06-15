<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

class Seller
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {

            $userType = Auth::user()->type->name;
            if ($userType == 'Seller') {
                return $next($request);
            } else {
                return route('login');
            }
        } else {
            return route('login');
        }
    }
}
