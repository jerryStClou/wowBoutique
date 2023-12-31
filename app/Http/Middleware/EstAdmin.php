<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EstAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);
        $utilisateur = $request->user();

        // dd($utilisateur->idRole);

        if (isset($utilisateur) && $utilisateur->idRole == 2) {
            return $next($request);
        } else {
            abort(404);
        }
    }
}
