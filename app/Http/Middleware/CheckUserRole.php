<?php

namespace App\Http\Middleware;

use App\Models\Role;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if ($request->user() === null) {
            return response("Insufficient permissions", 401);
        }
        foreach ($roles as $role) {
            if ($request->user()->role_id == 1 && $role == 'admin') {
                return $next($request);
            } elseif ($request->user()->role_id == 2 && $role == 'advisor') {
                return $next($request);
            } elseif ($request->user()->role_id == 3 && $role == 'student') {
                return $next($request);
            } elseif ($request->user()->role_id == 4 && $role == 'organization') {
                return $next($request);
            } else {
                return response("Insufficient permissions", 401);
            }
        }
    }
}
