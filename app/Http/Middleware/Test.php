<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , ...$role): Response
    {
        // var_dump($role);
        // dd($role);
        if($role[0] == $role[1] ){
           return redirect('/welcome');
        }
        return $next($request);
    }
}
