<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {
        if (!Auth::user()->can($permission)) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                Auth::logout();
                return redirect()->route('admin.login.index');
            }
        }
        return $next($request);
    }
}
