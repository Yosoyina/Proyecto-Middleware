<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class autentificador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    
    public function handle(Request $request, Closure $next): Response
    {

        if($request->input('contrasena') !== '1234'){
            return redirect('/home');
        }

        return $next($request);
    }

    public function register(): void
    {
        $this->app->singleton(autentificador::class);
    }
}
