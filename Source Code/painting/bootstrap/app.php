<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
		/* Admin page blocker */
        $middleware->alias([
            'userMiddleware' => \App\Http\Middleware\UserMiddleware::class,
            'adminMiddleware' => \App\Http\Middleware\AdminMiddleware::class,
            'shareCartItems' => \App\Http\Middleware\ShareCartItems::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();