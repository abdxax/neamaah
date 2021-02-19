<?php

namespace App\Http\Middleware;

use Closure;

class userMid
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
        if(!auth()->check()||auth()->user()->role_id!=2){
            return redirect()->route('index');
        }
        return $next($request);
    }
}
