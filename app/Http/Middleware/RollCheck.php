<?php

namespace App\Http\Middleware;

use Closure;

class RolCheck
{

    //una función que compruebe si el usuario tiene el rol indicado
    public function handle($request, Closure $next, $rol)
    {
        if (auth()->user()->rol === $rol)
            return $next($request);
        else
            return redirect('/');
    }
}
