<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureSuperAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is an admin
        if (session()->get('user_role') !== 'superadmin') {
            // Redirect if not an admin
            return redirect('/login')->withErrors(['login_error' => 'Access denied please login']);
        }

        return $next($request);
    }
}
