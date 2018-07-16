<?php

namespace App\Http\Middleware;

use Closure;

class RequestTesting
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
       // var_dump(request()->fullUrl()); //3. var dump will show you the link without the port
       // dd(request()->fullUrl()); //2. you will see the "url" is correct but is it?
        dd(parse_url(request()->fullUrl())); //1. parsing does not work
        return $next($request);
    }
}
