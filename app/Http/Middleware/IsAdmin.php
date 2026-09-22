<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        if(Auth::check() && $request->user()->role ==='admin'){
            return $next($request); 
        }elseif(Auth::check() && $request->user()->role ==='cliente'){
            return redirect()->away('http://localhost:5173');
        }
        return redirect('/')->with('error', 'You do not have admin access.');   
    }
}
