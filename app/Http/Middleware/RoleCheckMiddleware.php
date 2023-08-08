<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

//        if (Auth::guard('admin')->check() && in_array(Auth::guard('admin')->user()->role_id, [0])) {

            return $next($request);
//        }

        // Customize the response or redirect if the role_name check fails
//        return redirect()->route('access-denied');
    }
}
