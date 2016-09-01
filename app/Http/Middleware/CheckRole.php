<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Auth;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request value
     * @param \Closure                 $next    the callback after middleware
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check() or $request->user()->role_id == config('define.admin_id')) {
            return redirect()->intended();
        }
        return $next($request);
    }
}
