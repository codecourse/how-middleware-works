<?php

namespace App\Middleware;

use App\Core\Http\Request;
use App\Core\Middleware\Middleware;

class FirstMiddleware implements Middleware
{
    public function __invoke(Request $request, callable $next)
    {
        dump('first middleware');

        return $next($request);
    }
}