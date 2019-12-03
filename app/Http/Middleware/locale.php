<?php

namespace App\Http\Middleware;

use Closure;

class locale
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
        switch ($request->header('Language')){
            case 'my':
                \App::setLocale('my');
                break;
            case 'en':
                \App::setLocale('en');
                break;
            default:
                \App::setLocale('my');
                break;
        }
        return $next($request);
    }
}
