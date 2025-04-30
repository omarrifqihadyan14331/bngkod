<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
<<<<<<< HEAD
use App\Http\Middleware\Role;
=======
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
<<<<<<< HEAD
        $middleware->alias([
            'role' => Role::class, // ✅ Alias untuk middleware "role"
        ]);
=======
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
