<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUsers
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()) {
            return $next($request);
        }

        return back()->with('warning', 'Only Users has permission.');
    }
}
