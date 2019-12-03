<?php

namespace App\Http\Middleware;

use Closure;

class apiSecret
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
        if($request->secret !== '$2y$10$M3re/TREbSIt0tEm74oxUu4sCRLtYQpkE4LSmJgWpYsLpBgTNxzMi'){
            return response()->json('need_some_key',500);
        }
        return $next($request);
    }
}
