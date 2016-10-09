<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class CheckActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if($user->active == 0) {
            return redirect('verify');
        }
        return $next($request);
    }
}
