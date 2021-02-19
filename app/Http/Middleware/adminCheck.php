<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
class adminCheck
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
        if(!auth()->check()||auth()->user()->role->id!=1){
            return redirect()->route('login');
        }
        return $next($request);
    }
}
