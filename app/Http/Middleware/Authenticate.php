<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {

            // Jika request berupa ajax atau json
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            // Selainnya, akses dengan URL
            } else {
                return redirect()->guest('login');
            }
        }
        
        return Auth::check()? $next($request): redirect('login');
    }
}
