<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $role)
    {
        if (auth()->guest()) {
            // Aquí puedes redirigir al usuario a la página de inicio de sesión con un mensaje de error.
            return redirect()->route('403')->with('error', 'Por favor, inicie sesión para acceder a esta ruta.');
        }

        

        return $next($request);
    }
}
