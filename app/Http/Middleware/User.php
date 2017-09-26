<?php

namespace App\Http\Middleware;

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
        $response = $next($request);

        $value = $request->session()->get('user_id');
        
        if(!$request->session()->has('user_id')){
           dd($value);
        }

        return $response;
    }
}
