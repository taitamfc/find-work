<?php

namespace Modules\Employee\app\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()) {
            return $next($request);
        }
        return redirect()->route('employee.login');
    }
}
