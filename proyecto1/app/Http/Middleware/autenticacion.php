<?php

namespace App\Http\Middleware;

use Closure;

class autenticacion
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
        if($request->session()->has('idusuario') == true)
        {
            
        }
        else
        {
            return redirect('login');
        }       
        return $next($request);
    }
}
