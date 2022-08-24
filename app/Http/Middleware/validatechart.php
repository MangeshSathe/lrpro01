<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class validatechart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->birthdate == '') {
            return redirect('/chart')->with('status', 'Birth date cannot be blank!!');;
        }
        return $next($request);
    }
}
