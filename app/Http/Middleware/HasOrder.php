<?php

namespace App\Http\Middleware;

use App\Libraries\OrderStorage;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HasOrder
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $storage = new OrderStorage();
        if ($storage->retrieve()->getPackage()){
            return $next($request);
        }
        return redirect()->route('select-package');
    }
}
