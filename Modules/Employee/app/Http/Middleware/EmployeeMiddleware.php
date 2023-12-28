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
            if ($request->user()->status == 1 && $request->user()->type == 'employee') {
                return $next($request);
            }else{
                Auth::logout();
                return redirect()->route('employee.login')->with('error','Tài khoản không hoạt động. Vui lòng liên hệ quản trị viên!!');
            }
        }
        return redirect()->route('employee.login');
    }
}