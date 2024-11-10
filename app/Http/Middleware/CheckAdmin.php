<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Maneja una solicitud entrante.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
    // Verifica si el usuario está autenticado y es administrador
    if (Auth::check() && Auth::user()->is_admin) {
        return $next($request);
        }

    // Si el usuario no es administrador, redirigir al login con un mensaje de error
    return redirect()->route('login')->with('error', 'Acceso denegado. Solo para administradores.');
    }

}
