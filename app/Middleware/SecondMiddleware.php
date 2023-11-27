<?php

namespace App\Middleware;

use App\Core\Http\Request;
use App\Core\Middleware\Middleware;

class SecondMiddleware implements Middleware
{
    public function __invoke(Request $request, callable $next)
    {
        dump('second middleware');

        $request->code = 401;

        return $next($request);
    }
}