<?php

use App\Core\App;
use App\Middleware\FirstMiddleware;
use App\Middleware\SecondMiddleware;
use App\Core\Middleware\MiddlewareStack;

require_once __DIR__ . '/vendor/autoload.php';

$app = new App(new MiddlewareStack());

$app->add(new FirstMiddleware());
$app->add(new SecondMiddleware());

$app->run();
