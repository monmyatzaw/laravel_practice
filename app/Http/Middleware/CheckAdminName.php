<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminName
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        if ($user->email == 'monmyatzaw@gmail.com' && $user->name == 'Mon') {
            return response('Welcome back, admin Mon!', 403);
        }
        return $next($request);
    }
}
