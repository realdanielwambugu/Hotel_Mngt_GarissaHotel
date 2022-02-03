<?php

Namespace App\Middleware;

use Xcholars\Http\Request;

use Xcholars\Support\Proxies\Response;

use Closure;

use Xcholars\Support\Proxies\Auth as Login;

class Client
{
   /**
    * Handle the user request.
    *
    * @param object \Xcholars\Http\Request  $request
    * @param object Closure $next
    * @return mixed
    */
    public function handle(Request $request, Closure $next)
    {
        if (!Login::user()->isClient())
        {
            return Response::withRedirect('/admin/dashboard');
        }

        return $next($request);
    }
}
