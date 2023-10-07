<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$role): Response
    {

        if (in_array(1,$role) && User::isSuperAdmin()) {
            return $next($request);
        }

        elseif (in_array(2, $role) && user::isAdmin()) {
            return $next($request);
        }

        elseif (in_array(3, $role) && user::isEditor()) {
            return $next($request);
        }

        return redirect()->back()->with('error_notification','You are not authorized to access this page');
    }
}
