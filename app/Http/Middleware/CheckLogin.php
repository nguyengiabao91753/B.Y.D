<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
            if(Auth::guard('web')->check()) {
                // if(Auth::user()->level ==1){
                //     return redirect()->route('admin.category.index');
                // }else{
                //     return redirect()->route('home');
                // }

                return $next($request);
        }
        return redirect()->route('home');
    }
}
