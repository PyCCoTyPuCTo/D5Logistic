<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Customer extends Middleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {

            $user = Auth::user()->type;


        } else {
            return route('login');
        }


        //Auth::user
        //if ($request->user())
         //   return $next($request);
        //If not admin call to ManagerMiddleware
        //return app(ManagerMiddleware::class)->handle($request, function ($request) use ($next) {
         //   if (isManager())
          //      return $next($request);
          //  //if neither admin nor manager reject request
          //  return redirect()->home();
        //});
    }
}
