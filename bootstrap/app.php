<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )

    ->withMiddleware(function (Middleware $middleware): void {
        // alias(is nickname) middleware should match name in (route middleware)
    $middleware->alias([
        'check.email' => \App\Http\Middleware\CheckEmail::class,
        'checkm.admin' => \App\Http\Middleware\CheckAdminName::class,
    ]);
    
    })
    
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
