<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {    

        if( ! $request->user()->hasRole() ) { 

             return abort(403 , 'صفحه مورد نظر یافت نشد!');
        }
         
        return $next($request);
    }
}
