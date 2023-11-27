<?php

namespace App\Core;

use App\Core\Http\Request;
use App\Core\Middleware\Middleware;
use App\Core\Middleware\MiddlewareStack;

class App
{
    protected $middleware;
    
    public function __construct(MiddlewareStack $middleware)
    {
        $this->middleware = $middleware;
    }

    public function add(Middleware $middleware)
    {
        $this->middleware->add($middleware);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function run()
    {
        $result = $this->middleware->handle(new Request());
        
        dump('run app', $result);
    }
}
