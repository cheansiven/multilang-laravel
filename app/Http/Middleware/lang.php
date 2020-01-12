<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class lang
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
        if(!session()->has('locale')) {
            session()->put('locale', \Config::get('app.locale'));
        }
        app()->setlocale(session()->get('locale'));
        return $next($request);
    }
}
