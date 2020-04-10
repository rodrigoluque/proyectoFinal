<?php

namespace App\Http\Middleware;

use Closure;

class MiddlewareComprador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


public function handle($request, Closure $next)
{  
    //Comprueba que el usuario se haya logueado
    if(!(\auth())->check()){
        return redirect('/login')->with('error','No iniciaste sesión.');
    }
   

    if(!(\auth()->user()->usuEstado == 2)){
      return redirect('/inicio')->with('error','No tenés permisos para acceder.');
    }

    return $next($request);
}

}